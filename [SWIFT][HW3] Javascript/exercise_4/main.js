function subtract (a, b) {
    return (a - b);
}

function addition (a, b) {
    return (a + b);
}

function multiplication (a, b) {
    return (a + b);
}

function division (a, b) {
    return (a / b);
}


var a = 30,
    b = 50;

console.log(subtract(a, b));
console.log(addition(a, b));
console.log(multiplication(a, b));
console.log(division(a, b));

// Dog Object
var Dog = (function () {
    function Dog(legs, furColor) {
        this.legs = legs;
        this.furColor = furColor;
    }
    Dog.prototype.bark = function () {
        return 'bau-bau';
    };
    return Dog;
}());

var doggy = new Dog(4, 'brownish');
console.log(doggy.bark());


// randomNumber
var randNum = Math.random();
var flooredRandNum = Math.floor(randNum * 100);

console.log(flooredRandNum + ' --> the random number is floored to 2 digit and made is int \n' +
    'the real random numer is: ' + randNum);

//Cars Array
var carsArr = ["Ferrari" , "Ford" , "BMW", "Mini"];

console.log(carsArr);
console.log('the concat version: ' + carsArr.concat());
