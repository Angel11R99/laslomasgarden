<!-- SURVEY MODAL -->
<div id="surveyModal" class="survey-modal">
  <div class="survey-modal-content">

    <button class="survey-close">&times;</button>

    <!-- Language Selector -->
    <label style="font-weight:600;">Language / Idioma</label>
    <select id="surveyLang">
      <option value="en">English</option>
      <option value="es">Español</option>
    </select>

    <h2 data-en="Quick Housing Survey"
      data-es="Encuesta rápida de vivienda"></h2>

    <p data-en="May I ask you a few questions about a proposed affordable resort-style condominium project for this area."
      data-es="¿Puedo hacerle algunas preguntas sobre un proyecto de condominio estilo resort asequible propuesto para esta área?"></p>

    <form id="surveyForm">

      <!-- Question 1 -->
      <h3 data-en="Have you thought about having your own home?"
        data-es="¿Ha pensado en tener su propia vivienda?"></h3>
      <label><input type="radio" name="own_home" value="Yes" required>
        <span data-en="Yes" data-es="Sí"></span></label>
      <label><input type="radio" name="own_home" value="No">
        <span data-en="No" data-es="No"></span></label>

      <!-- Question 2 -->
      <h3 data-en="What amenities are most important to you in a residential complex? (Select all that apply)"
        data-es="¿Qué amenidades son más importantes para usted en un complejo residencial? (Seleccione todas las que apliquen)"></h3>

      <label><input type="checkbox" name="amenities[]" value="24/7 Security">
        <span data-en="24/7 Security" data-es="Seguridad 24/7"></span></label>

      <label><input type="checkbox" name="amenities[]" value="Pool">
        <span data-en="Pool" data-es="Piscina"></span></label>

      <label><input type="checkbox" name="amenities[]" value="Gym">
        <span data-en="Gym" data-es="Gimnasio"></span></label>

      <label><input type="checkbox" name="amenities[]" value="Community room">
        <span data-en="Community room" data-es="Salón comunal"></span></label>

      <label><input type="checkbox" name="amenities[]" value="Basketball court">
        <span data-en="Basketball court" data-es="Cancha de baloncesto"></span></label>

      <label><input type="checkbox" name="amenities[]" value="Children's playground">
        <span data-en="Children's playground" data-es="Parque infantil"></span></label>

      <label><input type="checkbox" name="amenities[]" value="Mini-market">
        <span data-en="Mini-market" data-es="Mini-mercado"></span></label>

      <label><input type="checkbox" name="amenities[]" value="Air-conditioning">
        <span data-en="Air-conditioning" data-es="Aire acondicionado"></span></label>

      <label><input type="checkbox" name="amenities[]" value="Assigned parking">
        <span data-en="Assigned parking" data-es="Parqueo asignado"></span></label>

      <label><input type="checkbox" name="amenities[]" value="Central laundry">
        <span data-en="Central laundry" data-es="Lavandería central"></span></label>

      <label><input type="checkbox" name="amenities[]" value="Elevator">
        <span data-en="Elevator" data-es="Ascensor"></span></label>

      <!-- Question 3 -->
      <h3 data-en="Are there any other amenities that are important to you?"
        data-es="¿Hay otras amenidades que sean importantes para usted?"></h3>
      <input type="text" name="other_amenities" placeholder="">

      <!-- Question 4 -->
      <h3 data-en="Which floor would you prefer to live on?"
        data-es="¿En qué piso preferiría vivir?"></h3>
      <label><input type="radio" name="floor" value="1st Floor">
        <span data-en="1st Floor" data-es="1er Piso"></span></label>
      <label><input type="radio" name="floor" value="2nd Floor">
        <span data-en="2nd Floor" data-es="2do Piso"></span></label>
      <label><input type="radio" name="floor" value="3rd Floor">
        <span data-en="3rd Floor" data-es="3er Piso"></span></label>

      <!-- Question 5 -->
      <h3 data-en="Would you be interested in a two-bedroom or three-bedroom apartment?"
        data-es="¿Le interesaría un apartamento de dos o tres habitaciones?"></h3>
      <label><input type="radio" name="bedrooms" value="Two bedrooms">
        <span data-en="Two bedrooms" data-es="Dos habitaciones"></span></label>
      <label><input type="radio" name="bedrooms" value="Three bedrooms">
        <span data-en="Three bedrooms" data-es="Tres habitaciones"></span></label>

      <!-- Question 6 -->
      <h3 data-en="Would you want it furnished or unfurnished?"
        data-es="¿Lo querría amueblado o sin amueblar?"></h3>
      <label><input type="radio" name="furnished" value="Furnished">
        <span data-en="Furnished" data-es="Amueblado"></span></label>
      <label><input type="radio" name="furnished" value="Unfurnished">
        <span data-en="Unfurnished" data-es="Sin amueblar"></span></label>

      <!-- Question 7 -->
      <h3 data-en="Do you currently own your own home or pay rent?"
        data-es="¿Actualmente es propietario de su vivienda o paga alquiler?"></h3>
      <label><input type="radio" name="current_status" value="Own">
        <span data-en="Own" data-es="Propietario"></span></label>
      <label><input type="radio" name="current_status" value="Rent">
        <span data-en="Rent" data-es="Alquiler"></span></label>

      <!-- Question 8 -->
      <h3 data-en="If you decided to purchase a condominium, that fit your description, what price range would your budget allow?"
        data-es="Si decidiera comprar un condominio que se ajuste a su descripción, ¿qué rango de precio permitiría su presupuesto?"></h3>
      <select name="budget">
        <option value="75000">$75,000 USD / RD$4,720,000</option>
        <option value="90000">$90,000 USD / RD$5,661,000</option>
        <option value="105000">$105,000 USD / RD$6,604,000</option>
        <option value="120000">$120,000 USD / RD$7,548,000</option>
      </select>

      <!-- Question 9 -->
      <h3 data-en="Would you need bank financing to buy the apartment?"
        data-es="¿Necesitaría financiamiento bancario para comprar el apartamento?"></h3>
      <label><input type="radio" name="financing" value="Yes">
        <span data-en="Yes" data-es="Sí"></span></label>
      <label><input type="radio" name="financing" value="No">
        <span data-en="No" data-es="No"></span></label>

      <!-- Question 10 -->
      <h3 data-en="How much down payment could you make?"
        data-es="¿Cuánto podría dar de inicial?"></h3>
      <select name="down_payment">
        <option value="10000">$10,000 USD / RD$650,000</option>
        <option value="20000">$20,000 USD / RD$1,300,000</option>
        <option value="30000">$30,000 USD / RD$1,950,000</option>
        <option value="40000">$40,000 USD / RD$2,600,000</option>
        <option value="50000">$50,000 USD / RD$3,250,000</option>
      </select>

      <!-- Question 11 -->
      <h3 data-en="Considering all your financial obligations, what monthly payments could you make?"
        data-es="Considerando todas sus obligaciones financieras, ¿qué pagos mensuales podría hacer?"></h3>
      <select name="monthly_payment">
        <option value="600">$600 USD / RD$39,000</option>
        <option value="750">$750 USD / RD$49,000</option>
        <option value="1000">$1,000 USD / RD$65,000</option>
        <option value="1500">$1,500 USD / RD$98,000</option>
      </select>

      <!-- Question 12 -->
      <h3 data-en="Would you prefer to pay monthly installments to own your own home or pay rent?"
        data-es="¿Preferiría pagar cuotas mensuales para ser propietario de su vivienda o pagar alquiler?"></h3>
      <label><input type="radio" name="prefer_own_rent" value="Own">
        <span data-en="Own" data-es="Propietario"></span></label>
      <label><input type="radio" name="prefer_own_rent" value="Rent">
        <span data-en="Rent" data-es="Alquiler"></span></label>

      <!-- Question 13 -->
      <h3 data-en="Would you like to go on our preferred customer list which gives you priority selection of condo?"
        data-es="¿Le gustaría estar en nuestra lista de clientes preferidos que le da prioridad en la selección de condominios?"></h3>
      <label><input type="radio" name="preferred_list" value="Yes">
        <span data-en="Yes" data-es="Sí"></span></label>
      <label><input type="radio" name="preferred_list" value="No">
        <span data-en="No" data-es="No"></span></label>

      <!-- Question 14 -->
      <h3 data-en="Can we contact you by WhatsApp or email with updates on the project?"
        data-es="¿Podemos contactarlo por WhatsApp o correo electrónico con actualizaciones del proyecto?"></h3>
      <label><input type="radio" name="contact_permission" value="Yes">
        <span data-en="Yes" data-es="Sí"></span></label>
      <label><input type="radio" name="contact_permission" value="No">
        <span data-en="No" data-es="No"></span></label>

      <!-- Contact Information -->
      <h3 data-en="Contact Information"
        data-es="Información de contacto"></h3>
      <input type="text" name="name" placeholder="Name / Nombre" required>
      <input type="text" name="contact" placeholder="Email / WhatsApp" required>

      <p data-en="Thank you, that completes our survey and we appreciate your answers."
        data-es="Gracias, eso completa nuestra encuesta y apreciamos sus respuestas."></p>

      <button type="submit"
        data-en="Submit Survey"
        data-es="Enviar Encuesta"></button>

    </form>
  </div>
</div>