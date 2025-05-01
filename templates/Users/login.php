
   
        <div class="header">
            <h1>HR Portal Sign In</h1>
            <p>Create your account to access the HR system</p>
        </div>
        
        <?= $this->Form->create(null) ?>
            
            
           
            
            <div class="form-group">
                <label for="email">Work Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            
            
            
            
            
            <button type="submit" href="/users">Sign In</button>
            
            <div class="login-link">
                Don't have an account? <a href="/signup">Sign Up</a>
            </div>
            <?= $this->Form->end() ?>
    