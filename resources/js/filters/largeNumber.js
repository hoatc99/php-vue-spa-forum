export function largeNumber (number) {
    if (number > 999999) {
        return (number / 1000000).toFixed(1) + 'M';
    } 

    if (number > 999) {
        return (number / 1000).toFixed(1) + 'k';
    }

    return number;
}