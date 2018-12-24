const today = new Date()

let weekday = today.getDay()

switch (weekday) {
        
    case 0: 
        dayZero = "Sonntag";
        dayOne = "Montag";
        break;
    
    case 1: 
        dayZero = "Montag";
        dayOne = "Dienstag";
        break;
    
    case 2: 
        dayZero = "Dienstag";
        dayOne = "Mittwoch";
        break;
        
    case 3: 
        dayZero = "Mittwoch";
        dayOne = "Donnerstag";
        break;
        
    case 4: 
        dayZero = "Donnerstag";
        dayOne = "Freitag";
        break;
        
    case 5: 
        dayZero = "Freitag";
        dayOne = "Samstag";
        break;
        
    case 6: 
        dayZero = "Samstag";
        dayOne = "Sonntag";
        break;
        
}