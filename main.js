/**
 * Функция Скрывает/Показывает блок
 * @author ox2.ru дизайн студия
 **/
function moveToSignUp() {
    document.getElementById('sign-up-form-div-id').style.display = "flex"; //Показываем элемент
    document.getElementById('sign-in-form-div-id').style.display = "none"; //Показываем элемент
    document.getElementById('authentication-title-h3').textContent = "Регистрация"; //Показываем элемент

}
function moveToSignIn() {
    document.getElementById('sign-in-form-div-id').style.display = "flex"; //Показываем элемент
    document.getElementById('sign-up-form-div-id').style.display = "none"; //Показываем элемент
    document.getElementById('authentication-title-h3').textContent = "Вход"; //Показываем элемент

}