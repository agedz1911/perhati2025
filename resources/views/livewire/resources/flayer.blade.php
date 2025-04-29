<div>
    <div class="carousel w-full shadow-md rounded-2xl">
        @foreach ($flayers as $image)
        <div id="{{$loop->index}}" class="carousel-item relative w-full max-w-lg ease-in-out duration-300 h-full object-cover">
            <img src="{{ asset('storage/' . $image->flayer)}}" alt=""
                class="h-full object-cover max-w-full rounded-2xl" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#" class="btn btn-circle btn-secondary btn-outline ">❮</a>
                <a href="#" class="btn btn-circle btn-secondary btn-outline">❯</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('livewire:navigated', function() {
        let slideIndex = 1;
        // Fungsi untuk menampilkan slide
        function showSlides(n) {
            let slides = document.getElementsByClassName("carousel-item");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
        // Fungsi untuk memindahkan slide ke depan atau ke belakang
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        // Fungsi untuk memindahkan slide secara otomatis
        setInterval(function() {
            plusSlides(1);
        }, 10000); // rotate every 10 seconds
        // Inisialisasi slide
        showSlides(slideIndex);
        // Add event listeners to next and previous buttons
        let nextButtons = document.querySelectorAll('.btn-circle:nth-child(2)');
        let prevButtons = document.querySelectorAll('.btn-circle:nth-child(1)');
        nextButtons.forEach((button, index) => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                plusSlides(1);
            });
        });
        prevButtons.forEach((button, index) => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                plusSlides(-1);
            });
        });
    });
</script>