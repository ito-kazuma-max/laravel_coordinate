'use strict';

{
    const deletes = document.querySelectorAll('.delete');
    deletes.forEach(span => {
        span.addEventListener('click', (event) => {
            event.preventDefault();
            if (!confirm('削除してよろしいですか？')) {
                return;
            }
            span.parentNode.submit();
        });
    });

}
