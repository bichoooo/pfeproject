<?php
/**
 * HR Platform layout
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>
    
    <!-- Load Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <!-- Load Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <?= $this->Html->css('hrplatform') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <!-- Navigation -->
    <nav class="bg-white shadow-sm py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div class="flex items-center">
                <?= $this->Html->link('HRFlow', ['controller' => 'Pages', 'action' => 'display', 'home'], ['class' => 'text-2xl font-bold text-blue-500']) ?>
            </div>
            <div class="hidden md:flex space-x-8">
                <?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'display', 'home'], ['class' => 'text-gray-600 hover:text-blue-500']) ?>
                <?= $this->Html->link('Features', ['controller' => 'Pages', 'action' => 'display', 'features'], ['class' => 'text-gray-600 hover:text-blue-500']) ?>
                <?= $this->Html->link('Jobs', ['controller' => 'Jobs', 'action' => 'index'], ['class' => 'text-gray-600 hover:text-blue-500']) ?>
                <?= $this->Html->link('Pricing', ['controller' => 'Pages', 'action' => 'display', 'pricing'], ['class' => 'text-gray-600 hover:text-blue-500']) ?>
                <?= $this->Html->link('About Us', ['controller' => 'Pages', 'action' => 'display', 'about'], ['class' => 'text-gray-600 hover:text-blue-500']) ?>
                <?= $this->Html->link('Contact', ['controller' => 'Pages', 'action' => 'display', 'contact'], ['class' => 'text-gray-600 hover:text-blue-500']) ?>
            </div>
            <div class="flex items-center space-x-4">
                <?= $this->Html->link('Log In', ['controller' => 'Users', 'action' => 'login'], ['class' => 'text-gray-600 hover:text-blue-500']) ?>
                <?= $this->Html->link('Sign Up', ['controller' => 'Users', 'action' => 'signup'], ['class' => 'btn-primary text-white py-2 px-4 rounded-md']) ?>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">HRFlow</h3>
                    <p class="text-gray-400 mb-4">Smart HR Management Platform that helps companies streamline their HR processes.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-medium mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><?= $this->Html->link('About Us', ['controller' => 'Pages', 'action' => 'display', 'about'], ['class' => 'text-gray-400 hover:text-white']) ?></li>
                        <li><?= $this->Html->link('Careers', ['controller' => 'Pages', 'action' => 'display', 'careers'], ['class' => 'text-gray-400 hover:text-white']) ?></li>
                        <li><?= $this->Html->link('Press', ['controller' => 'Pages', 'action' => 'display', 'press'], ['class' => 'text-gray-400 hover:text-white']) ?></li>
                        <li><?= $this->Html->link('Blog', ['controller' => 'Blog', 'action' => 'index'], ['class' => 'text-gray-400 hover:text-white']) ?></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium mb-4">Product</h3>
                    <ul class="space-y-2">
                        <li><?= $this->Html->link('Features', ['controller' => 'Pages', 'action' => 'display', 'features'], ['class' => 'text-gray-400 hover:text-white']) ?></li>
                        <li><?= $this->Html->link('Pricing', ['controller' => 'Pages', 'action' => 'display', 'pricing'], ['class' => 'text-gray-400 hover:text-white']) ?></li>
                        <li><?= $this->Html->link('Integrations', ['controller' => 'Pages', 'action' => 'display', 'integrations'], ['class' => 'text-gray-400 hover:text-white']) ?></li>
                        <li><?= $this->Html->link('API', ['controller' => 'Pages', 'action' => 'display', 'api'], ['class' => 'text-gray-400 hover:text-white']) ?></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><?= $this->Html->link('Privacy Policy', ['controller' => 'Pages', 'action' => 'display', 'privacy'], ['class' => 'text-gray-400 hover:text-white']) ?></li>
                        <li><?= $this->Html->link('Terms of Service', ['controller' => 'Pages', 'action' => 'display', 'terms'], ['class' => 'text-gray-400 hover:text-white']) ?></li>
                        <li><?= $this->Html->link('Security', ['controller' => 'Pages', 'action' => 'display', 'security'], ['class' => 'text-gray-400 hover:text-white']) ?></li>
                        <li><?= $this->Html->link('GDPR', ['controller' => 'Pages', 'action' => 'display', 'gdpr'], ['class' => 'text-gray-400 hover:text-white']) ?></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; <?= date('Y') ?> HRFlow. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>