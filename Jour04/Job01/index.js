function customToUpperCase(str) {
    let result = '';
    for (let i = 0; i < str.length; i++) {
      let charCode = str.charCodeAt(i);
      if (charCode >= 97 && charCode <= 122) {
        result += String.fromCharCode(charCode - 32);
      } else {
        result += str[i];
      }
    }
    return result;
}

