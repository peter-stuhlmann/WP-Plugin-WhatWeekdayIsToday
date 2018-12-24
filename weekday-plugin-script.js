const today = new Date()

let weekday = today.getDay()

switch (weekday) {
        
    case 0: 
        dayZero = "Sonntag";
        break;
    
    case 1: 
        dayZero = "Montag";
        break;
    
    case 2: 
        dayZero = "Dienstag";
        break;
        
    case 3: 
        dayZero = "Mittwoch";
        break;
        
    case 4: 
        dayZero = "Donnerstag";
        break;
        
    case 5: 
        dayZero = "Freitag";
        break;
        
    case 6: 
        dayZero = "Samstag";
        break;
        
}