function checkOne(num) {
    result = true
    for (let i = 2; i < num; i++) {
        if (num % i == 0) {
           result = false
           break
        }
    }
    return result
}

function isPrime(n) {
    if (typeof n == 'number') {
        if (checkOne(n)) {
            console.log('That is a prime number')
        } else {
            console.log('That is not a prime number')
        }
    } else if (typeof n == 'object') {
        for (value of n) {
            if (typeof value == 'number') {
                if (checkOne(value)) {
                    console.log('That is a prime number - ' + value)
                } else {
                    console.log('That is not a prime number - ' + value)
                }
            } else {
                console.log('That is a wrong type - ' + value)
            }
        }
    } else {
        console.log('Wrong type')
    }
}