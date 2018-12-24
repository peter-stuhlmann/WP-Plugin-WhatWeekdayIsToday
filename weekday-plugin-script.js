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
        daySix = "Samstag";
        break;
    
    case 1: 
        dayZero = "Montag";
        dayOne = "Dienstag";
        dayTwo = "Mittwoch";
        dayThree = "Donnerstag";
        dayFour = "Freitag";
        dayFive = "Samstag";
        daySix = "Sonntag";
        break;
    
    case 2: 
        dayZero = "Dienstag";
        dayOne = "Mittwoch";
        dayTwo = "Donnerstag";
        dayThree = "Freitag";
        dayFour = "Samstag";
        dayFive = "Sonntag";
        daySix = "Montag";
        break;
        
    case 3: 
        dayZero = "Mittwoch";
        dayOne = "Donnerstag";
        dayTwo = "Freitag";
        dayThree = "Samstag";
        dayFour = "Sonntag";
        dayFive = "Montag";
        daySix = "Dienstag";
        break;
        
    case 4: 
        dayZero = "Donnerstag";
        dayOne = "Freitag";
        dayTwo = "Samstag";
        dayThree = "Sonntag";
        dayFour = "Montag";
        dayFive = "Dienstag";
        daySix = "Mittwoch";
        break;
        
    case 5: 
        dayZero = "Freitag";
        dayOne = "Samstag";
        dayTwo = "Sonntag";
        dayThree = "Montag";
        dayFour = "Dienstag";
        dayFive = "Mittwoch";
        daySix = "Donnerstag";
        break;
        
    case 6: 
        dayZero = "Samstag";
        dayOne = "Sonntag";
        dayTwo = "Montag";
        dayThree = "Dienstag";
        dayFour = "Mittwoch";
        dayFive = "Donnerstag";
        daySix = "Freitag";
        break;
        
}