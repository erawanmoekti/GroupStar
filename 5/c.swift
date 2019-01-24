import Foundation 

let input = "Playground"
var output = ""
let length = input.count
var diff = 0

if length < 3 {
    output = input.lowercased
} else {
    diff = length - 3
    output = String(input.prefix(diff)) + String(input.suffix(3)).uppercased
}

print(output)