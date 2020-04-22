function solve(arr) {
  if (arr[0] == '+') {
    return Number(arr[1]) + Number(arr[2]) 
  } else if (arr[0] == '-') {
    return Number(arr[1]) - Number(arr[2]) 
  } else if (arr[0] == '*') {
    return Number(arr[1]) * Number(arr[2]) 
  } else if (arr[0] == '/') {
    return Number(arr[1]) / Number(arr[2]) 
  }
}

function calc(str) {
  let inp = str.split('');
  let i = 0;
  while (i < inp.length) {
    if ((inp[i] == '(' | inp[i] == '+' | inp[i] == '-' | inp[i] == '*' | inp[i] == '/') & inp[i + 1] != ' ') {
      inp.splice(i + 1, 0, ' ');
    }
    i++;
  }

  i = 0;
  while (i < inp.length) {
    if (inp[i] == ')' & inp[i - 1] != ' ') {
      inp.splice(i, 0, ' ');
    }
    i++;
  }

  inp = inp.join('').split(' ');
  i = 0;
  while (i < inp.length) {
    if (inp[i] == '(') {
      inp[i] = solve(inp.slice(i + 1, i + 4));
      inp.splice(i + 1, 4);
    }
    i++;
  }
  
  return solve(inp);
}

console.log('Input: + 3 5');
console.log(calc('+ 3 5'));

console.log('Input: - 3 5');
console.log(calc('- 3 5'));

console.log('Input: * 3 5');
console.log(calc('* 3 5'));

console.log('Input: / 3 5');
console.log(calc('/ 3 5'));

console.log('Input: *(+4 3) 5');
console.log(calc('*(+ 4 3) 5'));