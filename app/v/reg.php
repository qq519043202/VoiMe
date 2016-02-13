
    <div id="main">
    <input hidden class="hidden" id = "reg">
        <div class="header">
            <h1>Start your VoiMe!</h1>
            <h2>Login or register here</h2>
        </div>

        <div class="content">
            

        <form class="pure-form" action="?/usr/login" method="post">
            <fieldset>
                <legend>Login Here</legend>
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-sm-2-5">
                        <input class="pure-u-23-24" type="email" name='email' placeholder="Email">
                        <?php echo $info; ?>
                    </div>
                    <div class="pure-u-1 pure-u-sm-2-5">
                        <input class="pure-u-23-24" type="password" name="password" placeholder="Password">

                    </div>
    </div>   
                             
        <label for="terms" class="pure-checkbox">
                    <input id="terms" type="checkbox"> Remember me
                </label>    



        <button type="submit" class="pure-button pure-button-primary">Sign in</button>
        <a class="button-warning pure-button start_button" href="#">Turn to register</a>

 


            </fieldset>
        </form>


<form class="pure-form pure-form-aligned" action="?/usr/regi" method="post" style="display:none">
    <fieldset>
        <legend>Register Here</legend>
        <div class="pure-control-group">
            <label for="name">Username</label>
            <input id="name" name = 'name' type="text" placeholder="Username">
        </div>

        <div class="pure-control-group">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Password">
        </div>

        <div class="pure-control-group">
            <label for="email">Email Address</label>
            <input id="email" name="email" type="email" placeholder="Email Address">
        </div>

        <div class="pure-control-group">
            <label for="foo">Gender</label>
                <select name="sex" id="state">
                    <option value="0">Female</option>
                    <option value="1">Male</option>
                    <option value="2">?</option>
                </select>
        </div>

<div class="pure-controls">
            <label for="cb" class="pure-checkbox">
                <input id="cb" type="checkbox"> I've read the terms and conditions
            </label>

            <button type="submit" class="pure-button pure-button-primary">Submit</button>
            <a class="button-warning pure-button start_button" href="#">Turn to login</a>
        </div>
    </fieldset>
</form>



        </div>

    </div>
