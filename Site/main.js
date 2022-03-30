/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */


function verify(){
    if($("#exampleInputPassword1").val() != $("#exampleInputPassword2").val()){
        alert("Passwords are not matched;") 
        return false;
    }
}