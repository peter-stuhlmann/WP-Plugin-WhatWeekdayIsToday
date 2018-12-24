const today = new Date()

let weekday = today.getDay()

switch (weekday) {
        
    case 0: 
        dayZero = "Sonntag";
        dayOne = "Montag";
        dayTwo = "Dienstag";
        dayThree = "Mittwoch";
        dayFour = "Donnerstag";
        dayFive = "Freitag";
        break;
    
    case 1: 
        dayZero = "Montag";
        dayOne = "Dienstag";
        dayTwo = "Mittwoch";
        dayThree = "Donnerstag";
        dayFour = "Freitag";
        dayFive = "Samstag";
        break;
    
    case 2: 
        dayZero = "Dienstag";
        dayOne = "Mittwoch";
        dayTwo = "Donnerstag";
        dayThree = "Freitag";
        dayFour = "Samstag";
        dayFive = "Sonntag";
        break;
        
    case 3: 
        dayZero = "Mittwoch";
        dayOne = "Donnerstag";
        dayTwo = "Freitag";
        dayThree = "Samstag";
        dayFour = "Sonntag";
        dayFive = "Montag";
        break;
        
    case 4: 
        dayZero = "Donnerstag";
        dayOne = "Freitag";
        dayTwo = "Samstag";
        dayThree = "Sonntag";
        dayFour = "Montag";
        dayFive = "Dienstag";
        break;
        
    case 5: 
        dayZero = "Freitag";
        dayOne = "Samstag";
        dayTwo = "Sonntag";
        dayThree = "Montag";
        dayFour = "Dienstag";
        dayFive = "Mittwoch";
        break;
        
    case 6: 
        dayZero = "Samstag";
        dayOne = "Sonntag";
        dayTwo = "Montag";
        dayThree = "Dienstag";
        dayFour = "Mittwoch";
        dayFive = "Donnerstag";
        break;
        
}