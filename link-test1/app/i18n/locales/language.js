/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var language = navigator.language || navigator.userLanguage;

var english = "en-US";
var germany = "de";

switch (language) {

          case english : window.location = "en/";
          break;

          case germany : window.location = "de/";
          break;

          default : window.location = "en/";
          break;
  }
