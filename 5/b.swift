import Foundation 

let input = [1, 2, 3, 7, 8, 9, 11, 12, 13]
var output = 0

for number in input {
    if number < 11 {
        output += number
    }
}
print(output)