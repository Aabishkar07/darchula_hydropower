<!-- Demo styles -->
<style>
    swiper-container {
        width: 100%;
        height: 100%;
    }

    swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .autoplay-progress {
        position: absolute;
        right: 16px;
        bottom: 16px;
        z-index: 10;
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: var(--swiper-theme-color);
    }

    .autoplay-progress svg {
        --progress: 0;
        position: absolute;
        left: 0;
        top: 0px;
        z-index: 10;
        width: 100%;
        height: 100%;
        stroke-width: 4px;
        stroke: var(--swiper-theme-color);
        fill: none;
        stroke-dashoffset: calc(125.6px * (1 - var(--progress)));
        stroke-dasharray: 125.6;
        transform: rotate(-90deg);
    }
</style>

<!-- Swiper -->
<swiper-container class="mySwiper md:h-[70vh] 2xl:h-[80vh] object-fit" loop="true" pagination="true"
    pagination-clickable="true" navigation="true" space-between="30" centered-slides="true" autoplay-delay="2500"
    autoplay-disable-on-interaction="false">

    @foreach ($banners as $banner)
        <swiper-slide>
            <img src="{{ asset('uploads/' . $banner->image) }}" alt="" class="">
        </swiper-slide>
    @endforeach



    <div class="autoplay-progress" slot="container-end">
        <svg viewBox="0 0 48 48">
            <circle cx="24" cy="24" r="20"></circle>
        </svg>
        <span></span>
    </div>
</swiper-container>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");

    const swiperEl = document.querySelector("swiper-container");
    swiperEl.addEventListener("autoplaytimeleft", (e) => {
        const [swiper, time, progress] = e.detail;
        progressCircle.style.setProperty("--progress", 1 - progress);
        progressContent.textContent = `${Math.ceil(time / 1000)}s`;
    });
</script>
