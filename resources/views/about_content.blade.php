<section>

    <div class="top-banners" style="background-image: url('{{ asset('img/cover.jpg') }}'); background-color: #ffffff; background-size: 100% 100%; background-position: center; height: 500px; display: flex; align-items: center; justify-content: center;">
        <!-- Optional: If you want to add a title or image here -->
        <!-- <h1>Your Title</h1> -->
    </div>
    <div class="container py-4">
        <!-- Section Title -->
        <div class="text-center mb-1">
            <h2 class="text-center text-dark mb-4">Who We Are</h2>
            <div class="row justify-content-center">
                <!-- Left Paragraph -->
                <div class="col-md-6">
                    <p class="text-muted text-justify" style="font-size: 1.3rem; text-align: justify;">
                        Mi semper risus ultricies orci pulvinar in at enim orci. Quis facilisis nunc pellentesque in ullamcorper sit. Lorem blandit arcu sapien, senectus libero, amet dapibus cursus quam. Eget pellentesque eu purus volutpat adipiscing malesuada.
                    </p>
                </div>
                <!-- Right Paragraph -->
                <div class="col-md-6">
                    <p class="text-muted text-justify " style="font-size: 1.3rem; text-align: justify;">
                        Ac at sed sit senectus massa. Massa ante amet ultricies magna porta tempor. Orci leo tortor ornare id mattis auctor aliquam volutpat aliquet. Odio lectus viverra eu blandit nunc malesuada vitae eleifend pulvinar.
                    </p>
                </div>
            </div>
        </div>

        <!-- Stats Section -->

    </div>

    <div class="container mt-4">
        <div class="content">

            <h2 class="text-center text-dark mb-4">Our Story</h2>
            <div class="row justify-content-center">
                <!-- Left Paragraph -->
                <div class="col-md-6">
                    <p class="text-muted text-justify" style="font-size: 1.3rem; text-align: justify;">
                    We at ZNZ Handels GmbH offer a full service in the textile sector. We design and produce the latest fashion and basic articles, which we distribute through different own brands and licenses. 
                    </p>
                </div>
                <!-- Right Paragraph -->
                <div class="col-md-6">
                    <p class="text-muted text-justify " style="font-size: 1.3rem; text-align: justify;">
                    The textiles are procured through our cooperating production facilities in China, Pakistan, Portugal and Bangladesh. Quality control is very important to us, this is carried out via our own control and external testing institutes. 
                    </p>
                </div>
            </div>
        </div>
        
        <p class="text-muted" style="font-size: 1.3rem; font-style: italic; text-align: center">"ZNZ – why complicated when it's easy"</p>

    </div>
    </div>
    <div class="container mt-4">
        <div class="content">

            <h2 class="text-center text-dark mb-4">Our Vision</h2>
            <p class="text-justify text-muted mb-3" style="font-size: 1.3rem; text-align: justify;">
                Our vision at ZNZ Handels GmbH is to become a global leader in the trading industry, recognized for excellence, innovation, and ethical business practices. We aspire to bridge Bangladesh’s exceptional craftsmanship with international markets, delivering superior ready-made garments and accessories to meet diverse customer needs. By prioritizing sustainability, quality, and customer satisfaction, we aim to set new benchmarks in global trade and contribute to a more connected and responsible world.</p>

        </div>
    </div>
    <div class="container mt-4">
        <div class="content">

            <h2 class="text-center text-dark mb-4">Our Mission</h2>
            <p class="text-justify text-muted mb-3" style="font-size: 1.3rem; text-align: justify;">
                At ZNZ Handels GmbH, our mission is to connect businesses worldwide with high-quality ready-made garments and accessories crafted in Bangladesh. We are dedicated to delivering products that combine style, functionality, and affordability while ensuring ethical and sustainable practices. Through innovation, reliability, and exceptional customer service, we aim to meet the diverse needs of our global clientele. Our goal is to foster long-term partnerships by exceeding expectations and contributing to the growth of the industries we serve. Together, we strive to make global trading seamless, efficient, and impactful.</p>

        </div>
    </div>
</section>
<section class="container-fluid my-5" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px;">
    <h2 class="section-title mb-4" style="text-align: center">Our Product Range</h2>
    <div class="row g-4">

        <div class="col-md-4">
            <div class="feature-card" style="text-align: center; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
                <h5 style="text-align: center;">Seasonal Wear</h5>
                <div class="row g-2">
                    <div class="col-6">
                        <img src="{{ asset('images/winter wear.PNG') }}"
                            alt="Winter Wear"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Winter Wear"
                            data-description="Jackets, coats, and thermal layers for chilly weather."
                            data-image="{{ asset('images/winter wear.PNG') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/readymate summer.PNG') }}"
                            alt="Summer Wear"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Summer Wear"
                            data-description="Light and airy clothing to beat the heat in style."
                            data-image="{{ asset('images/readymate summer.PNG') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/rain wear.jpg') }}"
                            alt="Rainwear"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Rainwear"
                            data-description="Durable and waterproof jackets and ponchos."
                            data-image="{{ asset('images/rain wear.jpg') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/springwear.jpg') }}"
                            alt="Spring Wear"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Spring Wear"
                            data-description="Versatile pieces perfect for transitional weather."
                            data-image="{{ asset('images/springwear.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card" style="text-align: center; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
                <h5 style="text-align: center;">Accessories</h5>
                <div class="row g-2">
                    <div class="col-6">
                        <img src="{{ asset('images/readymate leather.jpg') }}"
                            alt="Leather Goods"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Leather Goods"
                            data-description="Wallets, belts, handbags, and other premium items."
                            data-image="{{ asset('images/readymate leather.jpg') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/scarf.jpg') }}"
                            alt="Scarves"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Scarves"
                            data-description="Stylish scarves for fashion and warmth."
                            data-image="{{ asset('images/scarf.jpg') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/hats.jpg') }}"
                            alt="Hats"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Hats"
                            data-description="Caps and hats for style, function, or seasonal needs."
                            data-image="{{ asset('images/hats.jpg') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/readymade jewelry.jpg') }}"
                            alt="Jewelry"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Jewelry"
                            data-description="Costume and fashion jewelry to enhance any outfit."
                            data-image="{{ asset('images/readymade jewelry.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card" style="text-align: center; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
                <h5 style="text-align: center;">Home Textiles</h5>
                <div class="row g-2">
                    <div class="col-6">
                        <img src="{{ asset('images/bedding.jpg') }}"
                            alt="Bedding"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Bedding"
                            data-description="High-quality sheets, pillowcases, and comforters."
                            data-image="{{ asset('images/bedding.jpg') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/towel.jpg') }}"
                            alt="Towels"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Towels"
                            data-description="Luxurious and absorbent bath and kitchen towels."
                            data-image="{{ asset('images/towel.jpg') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/curtain.jpg') }}"
                            alt="Curtains"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Curtains"
                            data-description="Stylish and functional curtains to complement any decor."
                            data-image="{{ asset('images/curtain.jpg') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/cushion.jpg') }}"
                            alt="Cushion"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Cushion"
                            data-description="Decorative and comfortable cushion covers for home interiors."
                            data-image="{{ asset('images/cushion.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card" style="text-align: center; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
                <h5 style="text-align: center;">Foot Wear</h5>
                <div class="row g-2">
                    <div class="col-6">
                        <img src="{{ asset('images/casual shoe.jpg') }}"
                            alt="Casual Shoe"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Casual Shoe"
                            data-description="Perfect for daily wear with comfort and durability."
                            data-image="{{ asset('images/casual shoe.jpg') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/formal shoe.jpg') }}"
                            alt="Formal Shoe"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Formal Shoe"
                            data-description="Elegant designs for business or formal events."
                            data-image="{{ asset('images/formal shoe.jpg') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/sportshoe.jpg') }}"
                            alt="Sports Shoe"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Sports Shoe"
                            data-description="Performance-driven footwear for active lifestyles."
                            data-image="{{ asset('images/sportshoe.jpg') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/sandal.jpg') }}"
                            alt="Sandals"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Sandals"
                            data-description="Lightweight and breathable for warm weather."
                            data-image="{{ asset('images/sandal.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card" style="text-align: center; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
                <h5 style="text-align: center;">Specialty Wear</h5>
                <div class="row g-2">
                    <div class="col-6">
                        <img src="{{ asset('images/ethnic wear.PNG') }}"
                            alt="Ethnic Wear"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Ethnic Wear"
                            data-description="Traditional and cultural attire for special occasions."
                            data-image="{{ asset('images/ethnic wear.PNG') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/readymate kids.PNG') }}"
                            alt="Kids Wear"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Kids Wear"
                            data-description="Fun, durable, and safe clothing for children."
                            data-image="{{ asset('images/readymate kids.PNG') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/pregnancy wear.PNG') }}"
                            alt="Pregnancy Wear"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Pregnancy Wear"
                            data-description="Supportive and stylish maternity apparel."
                            data-image="{{ asset('images/pregnancy wear.PNG') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/Readymate Travel Wear.jpg') }}"
                            alt="Travel Wear"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Travel Wear"
                            data-description=" Comfortable and practical outfits designed for journeys."
                            data-image="{{ asset('images/Readymate Travel Wear.jpg') }}">
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modalImage" src="" alt="" class="img-fluid mb-3" style="border-radius: 8px; max-height: 400px;">
                        <p id="modalDescription" class="mt-3"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card" style="text-align: center; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
                <h5 style="text-align: center;">Clothing</h5>
                <div class="row g-2">
                    <div class="col-6">
                        <img src="{{ asset('images/underwear.jpg') }}"
                            alt="Underwear"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Under Wear"
                            data-description="Comfortable, breathable designs for men, women, and children."
                            data-image="{{ asset('images/underwear.jpg') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/nightwear.JPG') }}"
                            alt="Nightwear"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Nightwear"
                            data-description="Stylish and cozy sleepwear for restful nights."
                            data-image="{{ asset('images/nightwear.JPG') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/swimming wear.jpg') }}"
                            alt="Swimming Wear"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Swimming Wear"
                            data-description="Trendy and durable options for all ages."
                            data-image="{{ asset('images/swimming wear.jpg') }}">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/socks.jpg') }}"
                            alt="Socks"
                            class="img-fluid mb-2"
                            style="border-radius: 8px; height: 120px; width: 100%; object-fit: cover; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-title="Socks"
                            data-description="Soft, durable, and versatile socks for every occasion."
                            data-image="{{ asset('images/socks.jpg') }}">
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modalImage" src="" alt="" class="img-fluid mb-3" style="border-radius: 8px; max-height: 400px;">
                        <p id="modalDescription" class="mt-3"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imageModal = document.getElementById('imageModal');
            imageModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget; // Element that triggered the modal
                const title = button.getAttribute('data-title');
                const description = button.getAttribute('data-description');
                const image = button.getAttribute('data-image');

                // Update modal content
                const modalTitle = imageModal.querySelector('.modal-title');
                const modalImage = imageModal.querySelector('#modalImage');
                const modalDescription = imageModal.querySelector('#modalDescription');

                modalTitle.textContent = title;
                modalImage.src = image;
                modalDescription.textContent = description;
            });
        });
    </script>

</section>

<section class="container my-5">
    <style>
        .hero {
            background: #f4f4f4;
            padding: 30px 0;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .feature-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            transition: transform 0.2s;
        }

        .feature-card:hover {
            transform: scale(1.05);
        }
    </style>
    <h2 class="section-title mb-4" style="text-align: center">Our Services</h2>
    <div class="row g-4">
        <div class="col-md-6">
            <div class="feature-card">
                <h5>End-to-End Solutions</h5>
                <p>From design creation to free-house delivery.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-card">
                <h5>Prototyping & Sampling</h5>
                <p>Initial product samples for quality and design approval.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-card">
                <h5>Material Sourcing</h5>
                <p>Procurement of high-quality fabrics and accessories.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-card">
                <h5>Private Label Solutions</h5>
                <p>Branding and packaging services for exclusive client identities.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-card">
                <h5>Sustainability Consulting</h5>
                <p>Guidance on adopting eco-friendly and ethical practices.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-card">
                <h5>Trend Forecasting</h5>
                <p>Insights into upcoming market and fashion trends.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-card">
                <h5>Production Monitoring</h5>
                <p>Oversight of the manufacturing process for precision and quality..</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-card">
                <h5>Global Logistics Management</h5>
                <p>Seamless coordination for international shipments.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-card">
                <h5>Packaging Optimization</h5>
                <p>Customizable and eco-friendly packaging solutions.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-card">
                <h5>Compliance Assurance</h5>
                <p> Ensuring adherence to industry and regulatory standards.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-card">
                <h5>After-Sales Support</h5>
                <p> Dedicated service to address post-delivery needs.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-card">
                <h5>Vendor Relationship Management</h5>
                <p>Building strong connections with trusted suppliers.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-card">
                <h5>Export Documentation</h5>
                <p>Complete support for shipping and customs documentation.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-card">
                <h5>Brand Collaboration</h5>
                <p>Assisting in working with licensee or partner brands.</p>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid my-5" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px;">
    <h2 class="section-title mb-4" style="text-align: center;">Our Topics</h2>
    <div class="row g-4 justify-content-center">
        <!-- Feature Card -->
        <div class="col-md-4 d-flex">
            <div class="feature-card p-4 text-center" style="background-color: white; border: 1px solid #ddd; border-radius: 8px; width: 100%; min-height: 300px;">
                <img src="{{ asset('images/lisence.jpg') }}" alt="Licensee Brands" class="img-fluid mb-3"
                    style="width: 400px; height: 300px; object-fit: cover; ">
                <h5>Licensee Brands</h5>
                <p>Collaboration with global brands to produce licensed designs.</p>
            </div>
        </div>
        <!-- Feature Card -->
        <div class="col-md-4 d-flex">
            <div class="feature-card p-4 text-center" style="background-color: white; border: 1px solid #ddd; border-radius: 8px; width: 100%; min-height: 300px;">
                <img src="{{ asset('images/design and style.jpg') }}" alt="Design and Style" class="img-fluid mb-3"
                    style="width: 400px; height: 300px; object-fit: cover; ">
                <h5>Design and Style Determination</h5>
                <p>Crafting unique styles tailored for both in-house and private labels.</p>
            </div>
        </div>
        <!-- Feature Card -->
        <div class="col-md-4 d-flex">
            <div class="feature-card p-4 text-center" style="background-color: white; border: 1px solid #ddd; border-radius: 8px; width: 100%; min-height: 300px;">
                <img src="{{ asset('images/production.jpg') }}" alt="Production and Quality Control" class="img-fluid mb-3"
                    style="width: 400px; height: 300px; object-fit: cover; ">
                <h5>Production and Quality Control</h5>
                <p>Ensuring flawless manufacturing with rigorous quality assurance processes.</p>
            </div>
        </div>
        <!-- Feature Card -->
        <div class="col-md-4 d-flex">
            <div class="feature-card p-4 text-center" style="background-color: white; border: 1px solid #ddd; border-radius: 8px; width: 100%; min-height: 300px;">
                <img src="{{ asset('images/logic.jpg') }}" alt="Logistics" class="img-fluid mb-3"
                    style="width: 400px; height: 300px; object-fit: cover; ">
                <h5>Logistics</h5>
                <p>Efficient supply chain management for timely global deliveries.</p>
            </div>
        </div>
        <!-- Feature Card -->
        <div class="col-md-4 d-flex">
            <div class="feature-card p-4 text-center" style="background-color: white; border: 1px solid #ddd; border-radius: 8px; width: 100%; min-height: 300px;">
                <img src="{{ asset('images/objective.jpg') }}" alt="Objectives" class="img-fluid mb-3"
                    style="width: 400px; height: 300px; object-fit: cover; ">
                <h5>Objectives</h5>
                <p>Delivering excellence by aligning operations with customer goals.</p>
            </div>
        </div>
        <!-- Feature Card -->
        <div class="col-md-4 d-flex">
            <div class="feature-card p-4 text-center" style="background-color: white; border: 1px solid #ddd; border-radius: 8px; width: 100%; min-height: 300px;">
                <img src="{{ asset('images/sustain.jpg') }}" alt="Sustainability" class="img-fluid mb-3"
                    style="width: 400px; height: 300px; object-fit: cover; ">
                <h5>Sustainability</h5>
                <p>Promoting eco-friendly practices and ethical manufacturing.</p>
            </div>
        </div>
    </div>
</section>