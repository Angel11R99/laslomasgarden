<style>
    /* ===== FOOTER ===== */
    .footer {
        background: var(--color-primary-dark);
        color: var(--color-text-light);
        padding: 2rem;
        text-align: center;
    }

    .footer-content {
        max-width: 1400px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        align-items: center;
        gap: 1rem;
    }

    .footer-content img {
        grid-column: 1;
        justify-self: start;
    }

    .footer-content p {
        grid-column: 2;
        text-align: center;
        font-size: 0.95rem;
        opacity: 0.9;
        width: 100%;
    }

    /* ===== RESPONSIVE FOOTER ===== */
    @media (max-width: 768px) {
        .footer-content {
            display: flex;
            flex-direction: column;
            text-align: center;
            gap: 1.5rem;
        }

        .footer-content p {
            width: auto;
        }
    }
</style>
<footer class="footer">
    <div class="footer-content">
        <img src="img/Logo Las Lomas Hills blanco.svg" alt="Las Lomas Serenas" style="height: 60px;">
        <p>Parcela 37, Sosúa, Puerto Plata, República Dominicana<br>
            © 2025 Las Lomas Serenas . Todos los derechos reservados.
        </p>
    </div>
</footer>