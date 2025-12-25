$errors = [];

// Ընդունում ենք POST տվյալները
$firstName   = trim($_POST['first_name'] ?? '');
$lastName    = trim($_POST['last_name'] ?? '');
$email       = trim($_POST['email'] ?? '');
$birthDate   = trim($_POST['birth_date'] ?? '');
$phone       = trim($_POST['phone'] ?? '');
$password    = trim($_POST['password'] ?? '');
$confirmPass = trim($_POST['confirm_password'] ?? '');


// -----------------------
// 1) Պարտադիր դաշտերի ստուգում
// -----------------------
if (empty($firstName))   $errors[] = "Անվան դաշտը պարտադիր է:";
if (empty($lastName))    $errors[] = "Ազգանունի դաշտը պարտադիր է:";
if (empty($email))       $errors[] = "Էլ. հասցեի դաշտը պարտադիր է:";
if (empty($birthDate))   $errors[] = "Ծննդյան ամսաթվի դաշտը պարտադիր է:";
if (empty($phone))       $errors[] = "Հեռախոսահամարի դաշտը պարտադիր է:";
if (empty($password))    $errors[] = "Գաղտնաբառի դաշտը պարտադիր է:";
if (empty($confirmPass)) $errors[] = "Գաղտնաբառի հաստատման դաշտը պարտադիր է:";


// -----------------------
// 2) Անուն / Ազգանուն — միայն տառեր
// -----------------------
if (!preg_match("/^[a-zA-ZԱ-Ֆա-ֆ]+$/u", $firstName)) {
    $errors[] = "Անունը պետք է պարունակի միայն տառեր:";
}

if (!preg_match("/^[a-zA-ZԱ-Ֆա-ֆ]+$/u", $lastName)) {
    $errors[] = "Ազգանունը պետք է պարունակի միայն տառեր:";
}


// -----------------------
// 3) Email ձևաչափ
// -----------------------
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Էլ. հասցեն սխալ ձևաչափով է:";
}


// -----------------------
// 4) Տարիք ≥ 18
// -----------------------
$age = date_diff(date_create($birthDate), date_create('today'))->y;

if ($age < 18) {
    $errors[] = "Տարիքը պետք է լինի առնվազն 18:";
}


// -----------------------
// 5) Հեռախոսահամարի ձևաչափ
//    +374 00 000 000
// -----------------------
if (!preg_match("/^\+374\s?\d{2}\s?\d{3}\s?\d{3}$/", $phone)) {
    $errors[] = "Հեռախոսահամարը պետք է լինի +374 00 000 000 ձևաչափով:";
}


// -----------------------
// 6) Գաղտնաբառի համընկնում
// -----------------------
if ($password !== $confirmPass) {
    $errors[] = "Գաղտնաբառերը չեն համընկնում:";
}



// -----------------------
// Վերջնական արդյունք
// -----------------------
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>• $error</p>";
    }
} else {
    echo "<p style='color:green;'>Բոլոր տվյալները վավեր են։</p>";
}
