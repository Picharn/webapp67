const matches = (obj, source)=> Object.keys(source).every(key=> obj.hasOwnProperty(key)&&obj[key]===source[key]);
console.log(matches({color:'Red',hair:'short',num:1},{color:'Red',hair:'short'}));
console.log(matches({color:'Red',hair:'short'},{color:'Red',hair:'short',num:1}));