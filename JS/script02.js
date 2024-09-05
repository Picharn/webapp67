const byte_Size = str =>new Blob([str]).size;
console.log(byte_Size('123456'));
console.log(byte_Size('hello mai'));
console.log(byte_Size('ไกไม่ปู'));