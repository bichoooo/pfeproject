<?php
/**
 * HR Platform Homepage
 */
$this->assign('title', 'HRFlow - Smart HR Management Platform');
?>

<!-- Hero Section -->
<section class="hero-bg py-20">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-12 md:mb-0">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight mb-6">Smart HR Management, Simplified</h1>
            <p class="text-lg text-gray-600 mb-8">Transform your HR operations with our all-in-one platform that helps you manage employees, track attendance, and streamline recruitment with advanced AI tools.</p>
            <div class="flex space-x-4">
                <?= $this->Html->link('Get Started', ['controller' => 'Users', 'action' => 'register'], ['class' => 'btn-primary text-white py-3 px-6 rounded-md font-medium']) ?>
                <?= $this->Html->link('See Demo', ['controller' => 'Pages', 'action' => 'display', 'demo'], ['class' => 'btn-secondary py-3 px-6 rounded-md font-medium']) ?>
            </div>
        </div>
        <div class="md:w-1/2">
            <img src="/img/dashboard-preview.jpg" alt="HR Platform Dashboard" class="rounded-lg shadow-lg">
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Powerful Features</h2>
            <p class="text-gray-600 max-w-lg mx-auto">Our platform offers everything you need to manage your HR processes efficiently.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Feature Card 1 -->
            <div class="feature-card bg-white rounded-xl shadow-md p-6">
                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-users text-blue-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Employee Management</h3>
                <p class="text-gray-600 mb-4">Easily manage employee profiles, documents, and performance reviews all in one place.</p>
                <?= $this->Html->link('Learn more →', ['controller' => 'Pages', 'action' => 'display', 'employee-management'], ['class' => 'text-blue-500 font-medium hover:underline']) ?>
            </div>
            
            <!-- Feature Card 2 -->
            <div class="feature-card bg-white rounded-xl shadow-md p-6">
                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-clock text-blue-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Attendance Tracking</h3>
                <p class="text-gray-600 mb-4">Track attendance, monitor leaves, and generate comprehensive reports with a few clicks.</p>
                <?= $this->Html->link('Learn more →', ['controller' => 'Pages', 'action' => 'display', 'attendance-tracking'], ['class' => 'text-blue-500 font-medium hover:underline']) ?>
            </div>
            
            <!-- Feature Card 3 -->
            <div class="feature-card bg-white rounded-xl shadow-md p-6">
                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-robot text-blue-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">AI-Powered CV Analysis</h3>
                <p class="text-gray-600 mb-4">Let our AI analyze CVs to find the best candidates for your open positions faster and more accurately.</p>
                <?= $this->Html->link('Learn more →', ['controller' => 'Pages', 'action' => 'display', 'ai-cv-analysis'], ['class' => 'text-blue-500 font-medium hover:underline']) ?>
            </div>
        </div>
    </div>
</section>

<!-- Jobs Found Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Featured Job Listings</h2>
            <p class="text-gray-600 max-w-lg mx-auto">Find and manage open positions in your company.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Job listings will be dynamically generated from database -->
            <?php if (isset($featuredJobs) && !empty($featuredJobs)): ?>
                <?php foreach ($featuredJobs as $job): ?>
                    <div class="job-card bg-white rounded-xl shadow-md p-6">
                        <span class="bg-blue-100 text-blue-600 text-xs font-medium py-1 px-2 rounded-full"><?= h($job->job_type) ?></span>
                        <h3 class="text-xl font-bold text-gray-800 my-3"><?= h($job->title) ?></h3>
                        <p class="text-gray-600 mb-4"><?= h($job->description) ?></p>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500 text-sm"><?= h($job->location) ?></span>
                            <?= $this->Html->link('More Details →', ['controller' => 'Jobs', 'action' => 'view', $job->id], ['class' => 'text-blue-500 font-medium hover:underline']) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Static job cards for fallback -->
                <div class="job-card bg-white rounded-xl shadow-md p-6">
                    <span class="bg-blue-100 text-blue-600 text-xs font-medium py-1 px-2 rounded-full">Full-time</span>
                    <h3 class="text-xl font-bold text-gray-800 my-3">Senior Product Designer</h3>
                    <p class="text-gray-600 mb-4">We're looking for a talented product designer to join our growing design team.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-500 text-sm">New York, NY</span>
                        <?= $this->Html->link('More Details →', ['controller' => 'Jobs', 'action' => 'view', 1], ['class' => 'text-blue-500 font-medium hover:underline']) ?>
                    </div>
                </div>
                <!-- Add more static job cards as needed -->
            <?php endif; ?>
        </div>
        <div class="text-center mt-10">
            <?= $this->Html->link('View All Jobs', ['controller' => 'Jobs', 'action' => 'index'], ['class' => 'btn-secondary py-2 px-6 rounded-md font-medium']) ?>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">About HRFlow</h2>
            <p class="text-gray-600 text-lg mb-8">Our mission is to simplify HR management for businesses of all sizes. We've built a platform that combines intuitive design with powerful features to help you manage your most valuable asset - your people.</p>
            <p class="text-gray-600 text-lg mb-8">Founded in 2020, HRFlow has helped over 2,000 companies improve their HR processes, reduce administrative overhead, and make better hiring decisions.</p>
            <div class="flex flex-wrap justify-center gap-6">
                <div class="text-center">
                    <h3 class="text-3xl font-bold text-blue-500">2,000+</h3>
                    <p class="text-gray-600">Companies</p>
                </div>
                <div class="text-center">
                    <h3 class="text-3xl font-bold text-blue-500">50,000+</h3>
                    <p class="text-gray-600">Employees Managed</p>
                </div>
                <div class="text-center">
                    <h3 class="text-3xl font-bold text-blue-500">98%</h3>
                    <p class="text-gray-600">Customer Satisfaction</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Plans -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Simple, Transparent Pricing</h2>
            <p class="text-gray-600 max-w-lg mx-auto">Choose the plan that works best for your business needs.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Pricing cards content -->
            <!-- Basic Plan -->
            <div class="pricing-card bg-white rounded-xl shadow-md p-8">
                <h3 class="text-xl font-bold text-gray-800 mb-2">Basic</h3>
                <p class="text-gray-600 mb-6">Perfect for small businesses</p>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-gray-800">$29</span>
                    <span class="text-gray-600">/month</span>
                </div>
                <ul class="mb-8 space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">Up to 25 employees</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">Basic attendance tracking</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">Employee profiles</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">Email support</span>
                    </li>
                </ul>
                <?= $this->Html->link('Get Started', ['controller' => 'Plans', 'action' => 'purchase', 'basic'], ['class' => 'btn-secondary w-full text-center py-2 px-4 rounded-md font-medium block']) ?>
            </div>
            
            <!-- Standard Plan -->
            <div class="pricing-card pricing-popular bg-white rounded-xl shadow-lg p-8">
              
                <h3 class="text-xl font-bold text-gray-800 mb-2">Standard</h3>
                <p class="text-gray-600 mb-6">Great for growing teams</p>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-gray-800">$79</span>
                    <span class="text-gray-600">/month</span>
                </div>
                <ul class="mb-8 space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">Up to 100 employees</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">Advanced attendance tracking</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">Performance reviews</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">Basic AI CV analysis</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">Priority email support</span>
                    </li>
                </ul>
                <?= $this->Html->link('Get Started', ['controller' => 'Plans', 'action' => 'purchase', 'standard'], ['class' => 'btn-primary w-full text-center text-white py-2 px-4 rounded-md font-medium block']) ?>
            </div>
            
            <!-- Premium Plan -->
            <div class="pricing-card bg-white rounded-xl shadow-md p-8">
                <h3 class="text-xl font-bold text-gray-800 mb-2">Premium</h3>
                <p class="text-gray-600 mb-6">For large organizations</p>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-gray-800">$199</span>
                    <span class="text-gray-600">/month</span>
                </div>
                <ul class="mb-8 space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">Unlimited employees</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">Advanced reporting</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">Complete AI recruitment suite</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">API access</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">24/7 priority support</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span class="text-gray-600">Dedicated account manager</span>
                    </li>
                </ul>
                <?= $this->Html->link('Get Started', ['controller' => 'Plans', 'action' => 'purchase', 'premium'], ['class' => 'btn-secondary w-full text-center py-2 px-4 rounded-md font-medium block']) ?>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-blue-500">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Ready to Transform Your HR Management?</h2>
        <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">Join thousands of companies that trust HRFlow to manage their workforce efficiently.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <?= $this->Html->link('Start Free Trial', ['controller' => 'Users', 'action' => 'register', 'trial' => true], ['class' => 'bg-white text-blue-500 py-3 px-8 rounded-md font-medium hover:bg-gray-100 transition']) ?>
            <?= $this->Html->link('Request Demo', ['controller' => 'Pages', 'action' => 'display', 'request-demo'], ['class' => 'border border-white text-white py-3 px-8 rounded-md font-medium hover:bg-blue-600 transition']) ?>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Get in Touch</h2>
            <p class="text-gray-600 max-w-lg mx-auto">Have questions? Our team is here to help.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <?= $this->Form->create(null, ['url' => ['controller' => 'Inquiries', 'action' => 'add']]) ?>
                    <div class="mb-4">
                        <?= $this->Form->label('name', 'Name', ['class' => 'block text-gray-700 font-medium mb-2']) ?>
                        <?= $this->Form->input('name', ['class' => 'w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500', 'required' => true]) ?>
                    </div>
                    <div class="mb-4">
                        <?= $this->Form->label('email', 'Email', ['class' => 'block text-gray-700 font-medium mb-2']) ?>
                        <?= $this->Form->input('email', ['type' => 'email', 'class' => 'w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500', 'required' => true]) ?>
                    </div>
                    <div class="mb-4">
                        <?= $this->Form->label('subject', 'Subject', ['class' => 'block text-gray-700 font-medium mb-2']) ?>
                        <?= $this->Form->input('subject', ['class' => 'w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500', 'required' => true]) ?>
                    </div>
                    <div class="mb-4">
                        <?= $this->Form->label('message', 'Message', ['class' => 'block text-gray-700 font-medium mb-2']) ?>
                        <?= $this->Form->textarea('message', ['rows' => 5, 'class' => 'w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500', 'required' => true]) ?>
                    </div>
                    <?= $this->Form->button('Send Message', ['class' => 'btn-primary text-white py-2 px-6 rounded-md font-medium']) ?>
                <?= $this->Form->end() ?>
            </div>
            <div>
                <div class="bg-gray-100 p-6 rounded-lg h-full">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Contact Information</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="text-blue-500 mt-1 mr-3">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p class="text-gray-600">
                                123 Business Avenue<br>
                                Suite 100<br>
                                Tech City, TC 10000
                            </p>
                        </div>
                        <div class="flex items-start">
                            <div class="text-blue-500 mt-1 mr-3">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <p class="text-gray-600">+1 (555) 123-4567</p>
                        </div>
                        <div class="flex items-start">
                            <div class="text-blue-500 mt-1 mr-3">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <p class="text-gray-600">info@hrmsystem.com</p>
                        </div>
                        <div class="flex items-start">
                            <div class="text-blue-500 mt-1 mr-3">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="text-gray-600">
                                <p class="font-medium">Business Hours:</p>
                                <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                                <p>Saturday - Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h4 class="text-lg font-medium text-gray-800 mb-3">Connect With Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white hover:bg-blue-600 transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-blue-400 flex items-center justify-center text-white hover:bg-blue-500 transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-blue-700 flex items-center justify-center text-white hover:bg-blue-800 transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-pink-600 flex items-center justify-center text-white hover:bg-pink-700 transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>