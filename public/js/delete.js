'use strict';

document.getElementById("delete_btn").addEventListener('click', function() {  
    var result = window.confirm('本当に削除しますか？');

    if( result ) {
        return true;
    }else {
        event.stopPropagation();
        event.preventDefault();
    }
}
);