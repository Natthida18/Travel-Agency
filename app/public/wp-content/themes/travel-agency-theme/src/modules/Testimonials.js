import $ from 'jquery';

class Testimonials {
    constructor() {
        this.currentIndex = 0;
        this.testimonialItems = $(".testimonial-item");
        this.totalItems = this.testimonialItems.length;
        this.setupPagination(); // Call setupPagination during initialization
        this.events();
    }
    
    setupPagination() {
        const pagination = $(".pagination-dots");
        pagination.empty(); // Clear existing pagination dots before appending new ones
        for (let i = 0; i < this.totalItems; i++) {
            pagination.append('<i class="far fa-circle pagination-dot"></i>');
        }
        this.updatePagination(); // Call updatePagination to set active dot
        pagination.on("click", (e) => {
            const newIndex = $(e.target).index();
            if (newIndex != this.currentIndex) {
                this.currentIndex = newIndex;
                this.showTestimonialAtIndex(this.currentIndex);
            }
        });
    }
    
    updatePagination() {
        $(".pagination-dot").removeClass("fas");
        $(".pagination-dot").addClass("far");
        $(".pagination-dot").eq(this.currentIndex).removeClass("far");
        $(".pagination-dot").eq(this.currentIndex).addClass("fas");
    }
    
    events() {
        $(".arrow-up").on("click", (e) => this.showPrevTestimonial(e));
        $(".arrow-down").on("click", (e) => this.showNextTestimonial(e));
    }
    
    showPrevTestimonial(e) {
        this.currentIndex = (this.currentIndex - 1) % this.totalItems;
        this.showTestimonialAtIndex(this.currentIndex);
    }
    
    showNextTestimonial(e) {
        this.currentIndex = (this.currentIndex + 1) % this.totalItems;
        this.showTestimonialAtIndex(this.currentIndex);
    }
    
    showTestimonialAtIndex(index) {
        this.testimonialItems.hide().removeClass("active");
        this.testimonialItems.eq(index).fadeIn(0).addClass("active");
    
        this.updatePagination(); // Call updatePagination to set initial active dot
    }
}

export default Testimonials;
