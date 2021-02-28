<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Xác minh email</h2>

        <div>
            Vui lòng thực hiện xác minh để đổi mật khẩu.
            <br/>
            <a href="{{ URL::to('account/forgotpassword/verify/' . $confirmation_code) }}">Nhấn để xác thực</a>

        </div>

    </body>
</html>
