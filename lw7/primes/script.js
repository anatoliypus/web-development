function checkOne(num) {
  result = true;
  if (num == 0 || num == 1) {
    return null;
  }
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
    if (checkOne(n) === true) {
      console.log('That is a prime number - ' + n);
    } else if (checkOne(n) === false) {
      console.log('That is not a prime number - ' + n);
    } else {
      console.log('That number can`t be prime or not prime - ' + n);
    }
  } else if (typeof n == 'object') {
    console.log('Input - [' + n + ']');
    for (value of n) {
      if (typeof value == 'number') {
        if (checkOne(value) === true) {
          console.log('That is a prime number - ' + value);
        } else if (checkOne(value) === false) {
          console.log('That is not a prime number - ' + value);
        } else {
          console.log('That number can`t be prime or not prime - ' + value);
        }
        } else {
            console.log('That is a wrong type - ' + value);
        }
    }
  } else {
    console.log('Input: ' + n);
    console.log('Wrong type');
  }
}

isPrime(0);
isPrime(1);
isPrime(5);
isPrime(10);
isPrime([0, 1, 5, 13, 14, 17]);
isPrime('abc');