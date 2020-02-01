<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?= BASE_URL ?>Public/assets/admin/css/style.css">
    </head>
        <div class="content">
            <div class="login-form">

                <fieldset>
                    <legend> ورود به حساب کاربری </legend>

                    <div class="alert alert-danger <?= isset($errors) ? "show" : ""; ?>">
                        <?= isset($errors) ? $errors : ""; ?>
                    </div>
                    <form method="POST" action="<?= BASE_URL ?>admin/login">
                        <div class="form-group">
                            <label for=""> نام کاربری:
                                <span class="require">*</span>
                            </label>
                            <input type="text" placeholder="username" name="admin_username" /><br/>
                        </div>
                        <div class="form-group">
                            <label for="">رمز عبور:
                                <span class="require">*</span>
                            </label>
                            <input type="password" placeholder="*******" name="admin_password" /><br/>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="ورود"/>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
        
        
        
                