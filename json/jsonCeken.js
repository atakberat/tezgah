/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var bilgiIstegi = new XMLHttpRequest();
bilgiIstegi.open('GET','../jsonDepo.json');
bilgiIstegi.onload = function(){
    console.log("buraya kadar geldi");
};
bilgiIstegi.send();