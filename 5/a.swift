import Foundation 

let input = "Swift"
var output = ""

if input.count <= 2 {
    output = input + input
} else {
    output = String(input.prefix(2)) + String(input.prefix(2))
}

print(output)
