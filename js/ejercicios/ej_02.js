/*
 * Escribe una función que reciba dos palabras (String) y retorne
 * verdadero o falso (Bool) según sean o no anagramas.
 * - Un Anagrama consiste en formar una palabra reordenando TODAS
 *   las letras de otra palabra inicial.
 * - NO hace falta comprobar que ambas palabras existan.
 * - Dos palabras exactamente iguales no son anagrama.
 */

function anagrama(string1, string2){
    const words1 = string1.split("").sort()
    const words2 = string2.split("").sort()
    if(string1 === string2){
        return false
    }
    if(words1.length != words2.length){
        return false
    }else{

        for(let i = 0; i < words1.length; i++){
            if(words1[i] !== words2[i]){
                return false
                
            }else{
                return true
            }
        }
    }    
}

console.log(anagrama("cara", "arca"))