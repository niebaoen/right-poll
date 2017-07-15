<?php require_once __DIR__ . '/../../../core/init.php';
/**
 * 로그인 처리 POST
 * @param var $email 로그인 아이디 (이메일)
 * @param var $pw 패스워드
 */

// post 파라미터가 제대로 넘어왔는지 확인
if (!isset($_POST['email'])) {echo "error:: cannot get email"; return;};
if (!isset($_POST['pw'])) {echo "error:: cannot get password"; return;};

// post 파라미터 세팅
$id = $_POST['email'];
$pw = Auth\Crypt::decryptCryptoJS($_POST['pw']);

// login 시도
$result = User\Login::userLogin($id,$pw);

// login 실패시 에러 메시지 반환
if($result!="success"){
    echo $result;
    return;
}

echo "success";
return;
