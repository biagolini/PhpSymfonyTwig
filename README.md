# Symfony Application with Twig

## Introduction

In this tutorial, we will cover the process of creating a simple Symfony application using the Twig templating engine. We will go through the necessary prerequisites, installation process, and initial project configuration.

## Setup

1. Check if your dependencies are correctly installed.

```bash
aws --version
git --version
apache2 -v
php --version
php -m # php extension
composer --version
symfony -V
```

2. Configure your Git user information.

```bash
git config --global user.name "Your Name"
git config --global user.email "your.email@example.com"
```

3. Creating a New Symfony Application.

```bash
symfony new PhpSymfonyTwig
```

4. Adding project dependencies. Before start, navigate to your local project directory and add the required dependencies:

```bash
cd mySymfonyApp
composer require annotation
composer require symfony/maker-bundle
composer require symfony/twig-bundle
composer require symfony/asset
```

5. Adding Controller

Create a TwigUserController using Symfony CLI. After running the following command, a new Controller will be found in src\Controller\NAMEController.php (i.e., src\Controller\TwigUserController.php).

```bash
symfony console make:controller TwigUser

```

6. Develop TwigUserController. For doing so, check my code presented in the src\Controller\TwigUserController.php file.

7. Develop Twig files. For doing so, check my code presented in the 'template' folder.

## Testing the Application Locally

Test run Symfony serve.

```
symfony serve --port=8080
```

Open your browser and test the application by accessing the following URLs.

```
http://localhost:8080/
http://localhost:8080/states
```

## Contributing

Feel free to submit issues, create pull requests, or fork the repository to help improve the project.

## License and Disclaimer

This project is open-source and available under the MIT License. You are free to copy, modify, and use the project as you wish. However, any responsibility for the use of the code is solely yours. Please use it at your own risk and discretion.
