------
### strings
#### Methods
[str_multipop](#str_multipop)
[str_multishift](#str_multishift)
[str_popex](#str_popex)
[str_shiftex](#str_shiftex)

------
##### str_multipop
```php
function str_multipop(string &$string, string $delimiter, int $amount) : array
```
Modify a string by splitting it by the given delimiter and popping `$amount` of elements off of the end.

If the delimiter was not found and no items were popped then this method returns an empty array and the input string is not modified.

- **$string** The string to be modified.
- **$delimiter** The substring to split the main string into seperate elements with.
- **$amount** The number of elements to removed from the end of the main string.

**Returns:**  an array containing all of the elements that were removed.


------
##### str_multishift
```php
function str_multishift(string &$string, string $delimiter, int $amount) : array
```
Modify a string by splitting it by the given delimiter and shifting `$amount` of elements off of the start.

If the delimiter was not found and no items were shifted then this method returns an empty array and the input string is not modified.

- **$string** The string to be modified.
- **$delimiter** The substring to split the main string into seperate elements with.
- **$amount** The number of elements to removed from the start of the main string.

**Returns:**  an array containing all of the elements that were removed.


------
##### str_popex
```php
function str_popex(string &$string, string $delimiter) : string
```
Split the given string by the delimiter and return the last element. The provided input string is shortened as a result.

If the delimiter was not found and no item was popped then this method returns an empty string and the input string is not modified.

- **$string** The string to be modified.
- **$delimiter** The substring to split the main string into seperate elements with.

**Returns:**  A string containing the element removed.


------
##### str_shiftex
```php
function str_shiftex(string &$string, string $delimiter) : string
```
Split the given string by the delimiter and return the first element. The provided input string is shortened as a result.

If the delimiter was not found and no item was shifted then this method returns an empty string and the input string is not modified.

- **$string** The string to be modified.
- **$delimiter** The substring to split the main string into seperate elements with.

**Returns:**  A string containing the element removed.


------
