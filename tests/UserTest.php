<?php

use PHPUnit\Framework\TestCase;
use Controller\UserController;

require_once __DIR__ . '/../vendor/autoload.php'; 

class UserTest extends TestCase
{
    private UserController $userController;
    private $mockUserModel;

    private const VALID_PASSWORD = '123456';
    private const HASHED_PASSWORD = '$2y$10$42Hn/S3.3j1c3x4y5z6a1O5r/T5c0p1r8L1m2o7F4P3k0J1s2i';

    protected function setUp(): void
    {
        $this->mockUserModel = $this->createMock(\Model\User::class);
        $this->userController = new UserController($this->mockUserModel);
        $_SESSION = [];
    }

    protected function tearDown(): void
    {
        $_SESSION = [];
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_registers_a_valid_user_successfully()
    {
        $name = "Amanda Julia Anabelle";
        $email = "teste@gmail.com";

        $this->mockUserModel
            ->expects($this->once())
            ->method('registerUser')
            ->with($name, $email, self::VALID_PASSWORD)
            ->willReturn(true);

        $result = $this->userController->createUser($name, $email, self::VALID_PASSWORD);
        $this->assertTrue($result);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_fails_to_register_user_with_missing_fields()
    {
        $result = $this->userController->createUser("Nome", "", self::VALID_PASSWORD);
        $this->assertFalse($result);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_fails_to_register_user_when_email_is_duplicate()
    {
        $this->mockUserModel
            ->expects($this->once())
            ->method('registerUser')
            ->willReturn(false);

        $result = $this->userController->createUser("Duplicado", "email@teste.com", self::VALID_PASSWORD);
        $this->assertFalse($result);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_logs_in_user_with_correct_credentials()
    {
        $email = 'login_ok@email.com';
        $password = self::VALID_PASSWORD;
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $user = [
            "id" => 1,
            "user_fullname" => "Amanda Julia",
            "email" => $email,
            "password" => $hashed
        ];

        $this->mockUserModel->expects($this->once())
            ->method('getUserByEmail')
            ->willReturn($user);

        $result = $this->userController->login($email, $password);

        $this->assertTrue($result);
        $this->assertEquals(1, $_SESSION['id']);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_fails_to_login_with_incorrect_password()
    {
        $email = 'teste@email.com';
        $this->mockUserModel->expects($this->once())
            ->method('getUserByEmail')
            ->willReturn([
                "id" => 1,
                "user_fullname" => "Teste",
                "email" => $email,
                "password" => self::HASHED_PASSWORD
            ]);

        $result = $this->userController->login($email, 'senhaerrada');
        $this->assertFalse($result);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_fetches_user_by_existing_and_non_existing_email()
    {
        $existingEmail = 'existente@email.com';
        $userData = ['id' => 1, 'email' => $existingEmail, 'user_fullname' => 'Usuário Existente'];

        $this->mockUserModel->expects($this->exactly(2))
            ->method('getUserByEmail')
            ->willReturnOnConsecutiveCalls($userData, null);

        $resultExisting = $this->userController->checkUserByEmail($existingEmail);
        $this->assertIsArray($resultExisting);
        $this->assertEquals($existingEmail, $resultExisting['email']);

        $resultNonExisting = $this->userController->checkUserByEmail('naoexiste@email.com');
        $this->assertNull($resultNonExisting);
    }
}
