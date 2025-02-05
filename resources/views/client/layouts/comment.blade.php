@if(Auth::check())
    
    <div class="commentContent">
        <div class="avatarUser">
            <img src="{{asset('library/images/avatar-user.jpg')}}" alt="Avatar User" class="object-fit-cover w-100 h-100">
        </div>
        <form class="formComment" action="" method="GET">
            <div class="starRating">
                <span class="starIcon" data-value="1"><i class="fa-solid fa-star"></i></span>
                <span class="starIcon" data-value="2"><i class="fa-solid fa-star"></i></span>
                <span class="starIcon" data-value="3"><i class="fa-solid fa-star"></i></span>
                <span class="starIcon" data-value="4"><i class="fa-solid fa-star"></i></span>
                <span class="starIcon" data-value="5"><i class="fa-solid fa-star"></i></span>
                <input type="hidden" id="fmiRate" name="fmiRate" value="0">
            </div>
            <textarea name="fmiCommentText" id="fmiCommentText" rows="4"></textarea>
            <button class="btnSearch">Gửi bình luận</button>
        </form>
    </div>
    <script>
        const stars = document.querySelectorAll('.starIcon');
        const fmiRate = document.getElementById('fmiRate');
        
        stars.forEach(star => {
            star.addEventListener('mouseenter', () => {
                const value = star.getAttribute('data-value');
                updateStars(value);
            });
            star.addEventListener('mouseleave', () => {
                if (fmiRate.value == 0) {
                    const selectedValue = document.querySelector('.star.selected')?.getAttribute('data-value');
                    updateStars(selectedValue || 0);
                }
            });
            star.addEventListener('click', () => {
                const value = star.getAttribute('data-value');
                updateStars(value);
                fmiRate.value = value;
            });
        });

        function updateStars(value) {
            stars.forEach(star => {
                const starValue = star.getAttribute('data-value');
                if (starValue <= value) {
                    star.classList.add('selected');
                } else {
                    star.classList.remove('selected');
                }
            });
        }
    </script>
@else
    <p>Vui lòng đăng nhập để đánh giá!</p>
@endif