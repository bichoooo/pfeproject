
   
        <div class="header">
            <h1>HR Portal Sign Up</h1>
            <p>Create your account to access the HR system</p>
        </div>
        
        <?= $this->Form->create(null) ?>
            
        <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="fullname" id="full_name" name="full_name" required>
            </div>
           
            
            <div class="form-group">
                <label for="email">Work Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword"  required>
            </div>
            
            
            
            
            
            <div class="checkbox-group">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">I agree to the Terms of Service and Privacy Policy</label>
            </div>
            
            <button type="submit">Create Account</button>
            
            <div class="login-link">
                Already have an account? <a href="/users">Sign in</a>
            </div>
            <?= $this->Form->end() ?>
    