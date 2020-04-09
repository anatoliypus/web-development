function checkOne(num) {
  result = true;
  for (let i = 2; i < num; i++) {
    if (num % i == 0) {
      result = false;
      break;
    }
  }
    return result
}

function isPrime(n) {
  if (typeof n == 'number') {
    if (checkOne(n)) {
      console.log('That is a prime number - ' + n);
  } else {
      console.log('That is not a prime number - ' + n);
  }
  } else if (typeof n == 'object') {
    console.log('Input - [' + n + ']');
    for (value of n) {
      if (typeof value == 'number') {
        if (checkOne(value)) {
          console.log('That is a prime number - ' + value);
        } else {
            console.log('That is not a prime number - ' + value);
        }
        } else {
            console.log('That is a wrong type - ' + value);
        }
    }
  } else {
    console.log('Input - abc')
    console.log('Wrong type');
  }
}

isPrime(5);
isPrime(10);
isPrime([13, 14, 17]);
isPrime('abc');