<?php declare(strict_types = 0);
/**
*
* Core Utilities
* 
* @package		phext
* @subpackage	str-globals
* @version		1
* 
* @license		MIT see license.txt
* @copyright	2021 Sqonk Pty Ltd.
*
*
* This file is distributed
* on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
* express or implied. See the License for the specific language governing
* permissions and limitations under the License.
*/



/**
 * Modify a string by splitting it by the given delimiter and popping `$amount` of elements off of the end.
 * 
 * If the delimiter was not found and no items were popped then this method returns an empty
 * array and the input string is not modified.
 * 
 * -- parameters:
 * @param $string The string to be modified.
 * @param $delimiter The substring to split the main string into seperate elements with.
 * @param $amount The number of elements to removed from the end of the main string.
 * 
 * @return an array containing all of the elements that were removed.
 */
function str_multipop(string &$string, string $delimiter, int $amount): array 
{
    $poppedItems = [];
    if (str_contains($string, $delimiter)) {
        $parts = explode($delimiter, $string);
        $amount = min($amount, count($parts));
        for ($i = 0; $i < $amount; $i++)
            $poppedItems[] = array_pop($parts);
    
        $string = implode($delimiter, $parts);
    }
    
    return array_reverse($poppedItems);
}

/**
 * Modify a string by splitting it by the given delimiter and shifting `$amount` of elements off of the start.
 * 
 * If the delimiter was not found and no items were shifted then this method returns an empty
 * array and the input string is not modified.
 * 
 * -- parameters:
 * @param $string The string to be modified.
 * @param $delimiter The substring to split the main string into seperate elements with.
 * @param $amount The number of elements to removed from the start of the main string.
 * 
 * @return an array containing all of the elements that were removed.
 */
function str_multishift(string &$string, string $delimiter, int $amount): array 
{
    $poppedItems = [];
    if (str_contains($string, $delimiter)) {
        $parts = explode($delimiter, $string);
        $amount = min($amount, count($parts));
        for ($i = 0; $i < $amount; $i++)
            $poppedItems[] = array_shift($parts);
    
        $string = implode($delimiter, $parts);
    }
    
    return $poppedItems;
}


/**
 * Split the given string by the delimiter and return the last element. The provided input string
 * is shortened as a result.
 * 
 * If the delimiter was not found and no item was popped then this method returns an empty
 * string and the input string is not modified.
 * 
 * -- parameters:
 * @param $string The string to be modified.
 * @param $delimiter The substring to split the main string into seperate elements with.
 * 
 * @return A string containing the element removed.
 */
function str_popex(string &$string, string $delimiter): string
{
    if (str_contains($string, $delimiter)) {
        $items = str_multipop($string, $delimiter, 1);
        if (count($items)) {
            return $items[0];
        }
    }
	return '';
}

/**
 * Split the given string by the delimiter and return the first element. The provided input string
 * is shortened as a result.
 * 
 * If the delimiter was not found and no item was shifted then this method returns an empty
 * string and the input string is not modified.
 * 
 * -- parameters:
 * @param $string The string to be modified.
 * @param $delimiter The substring to split the main string into seperate elements with.
 * 
 * @return A string containing the element removed.
 */
function str_shiftex(string &$string, string $delimiter): string
{
    if (str_contains($string, $delimiter)) {
        $items = str_multishift($string, $delimiter, 1);
        if (count($items)) {
            return $items[0];
        }
    }
	return ''; 
}