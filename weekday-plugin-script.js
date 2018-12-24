const today = new Date()

let weekday = today.getDay()

switch (weekday) {
        
    case 0: 
        dayZero = "Sonntag";
        dayOne = "Montag";
        dayTwo = "Dienstag";
        dayThree = "Mittwoch";
        dayFour = "Donnerstag";
        break;
    
    case 1: 
        dayZero = "Montag";
        dayOne = "Dienstag";
        dayTwo = "Mittwoch";
        dayThree = "Donnerstag";
        dayFour = "Freitag";
        break;
    
    case 2: 
        dayZero = "Dienstag";
        dayOne = "Mittwoch";
        dayTwo = "Donnerstag";
        dayThree = "Freitag";
        dayFour = "Samstag";
        break;
        
    case 3: 
        dayZero = "Mittwoch";
        dayOne = "Donnerstag";
        dayTwo = "Freitag";
        dayThree = "Samstag";
        dayFour = "Sonntag";
        break;
        
    case 4: 
        dayZero = "Donnerstag";
        dayOne = "Freitag";
        dayTwo = "Samstag";
        dayThree = "Sonntag";
        dayFour = "Montag";
        break;
        
    case 5: 
        dayZero = "Freitag";
        dayOne = "Samstag";
        dayTwo = "Sonntag";
        dayThree = "Montag";
        dayFour = "Dienstag";
        break;
        
    case 6: 
        dayZero = "Samstag";
        dayOne = "Sonntag";
        dayTwo = "Montag";
        dayThree = "Dienstag";
        dayFour = "Mittwoch";
        break;
        
}