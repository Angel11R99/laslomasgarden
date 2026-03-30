<style>
    /* ===== HEADER & NAVIGATION ===== */
    

    .nav-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0.5rem 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .logo-container img {
        height: 60px;
        transition: var(--transition-normal);
    }

    .nav-menu {
        display: flex;
        gap: 2rem;
        list-style: none;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        white-space: nowrap;
    }

    .nav-menu a {
        font-weight: 700;
      
        position: relative;
        font-size: 1rem;
    }

    .nav-menu a::after {
        content: '';
        position: absolute;
        bottom: -4px;
        left: 0;
        width: 0;
        height: 2px;
       
    
    }
.btn-contact.desktop-only {
    margin-left: auto;
    white-space: nowrap;
}

    .nav-menu a:hover::after {
        width: 100%;
    }

    .btn-contact {
        background: var(--color-primary);
        color: white !important;
        padding: 1.5rem 2.25rem;
        border-radius: 6px;
        font-weight: 500;
        font-size: 0.95rem;
        transition: var(--transition-normal);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        z-index: 2;
        display: none;
       
    }

    .btn-contact:hover {
        
        transform: translateY(-1px);
    }

    .nav-menu .btn-contact::after {
        display: none;
    }

    .mobile-menu-toggle {
        display: none;
        background: none;
        font-size: 1.5rem;
        color: var(--color-primary);
        z-index: 1001;
        border: none;
    }

    .mobile-only {
        display: none;
    }

    /* ===== RESPONSIVE HEADER ===== */
    @media (max-width: 1024px) {
        .logo-container img {
            height: 90px;
        }

        .nav-menu {
            gap: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .nav-container {
            padding: 0.5rem 1.5rem;
        }

        .logo-container img {
            height: 80px;
        }

        .nav-menu {
            position: fixed;
            top: 0;
            left: -100%;
            width: 80%;
            max-width: 300px;
            height: 100vh;
           
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
           
            transition: var(--transition-normal);
            transform: none;
            z-index: 1002;
        }

        .nav-menu.active {
            left: 0;
        }

        .mobile-menu-toggle {
            display: block;
        }

        .desktop-only {
            display: none;
        }

        .mobile-only {
            display: flex;
        }

        .nav-menu li {
            width: 100%;
            text-align: center;
        }

        .nav-menu a {
            font-size: 1rem;
            display: block;
            padding: 1rem 0;
        }

        .nav-menu .btn-contact {
            margin-top: 1rem;
            width: 100%;
        }
    }
</style>

    <nav class="nav-container">
       
        

        <ul class="nav-menu" id="navMenu">
            <li>
                <a href="#" class="js-open-tour">360 Tour</a>
            </li>
         
            <li class="mobile-only">
                <a href="#" class="btn-contact js-open-tour" style="margin-bottom: 0.75rem;">Open 360 Tour</a>
            </li>
            <li class="mobile-only">
                <a href="#contact" class="btn-contact">Contact Us</a>
            </li>
        </ul>

        <a href="#" class="btn-contact desktop-only js-open-tour" style="margin-right: 0.75rem; display: inline-flex;">360 Tour</a>
        <a href="#contact" class="btn-contact desktop-only">Contact Us</a>
        <button class="mobile-menu-toggle" id="mobileMenuToggle">☰</button>
    </nav>
