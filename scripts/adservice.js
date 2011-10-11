/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

window.onload = function() {
}

//TODO: create "iframe1" (hidden iframe, its script contains the communication
//  system between "Simple Blog" and "AdService"  

//TODO: keywords search

var adservice = (function() {
    
    var inserted = false;       //Ads already inserted in the container app?
    
    return {
        getInserted: function() {
            return inserted;
        },
        setInserted: function() {
            inserted = true;
        },
        setContainer: function(data) {
            //TODO: uses "postMessage", this function will create the container
            //  "iframe2" where to put the ads.
            //  This function receives the result of the keyword search for
            //  sending this information to the "AdService" server by "iframe1".            
        }
    }
}());