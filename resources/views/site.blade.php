<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title ?? 'Pool School - Prive Zwemles' }}</title>
<meta name="description" content="Privé zwemles voor kinderen in een warme, veilige omgeving. Groepen van max. 3 kinderen.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Fredoka+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/poolschool-app.css') }}">
</head>
<body>

<nav class="navbar">
  <div class="container nav-inner">
    <a href="{{ route('home') }}" class="nav-logo">
      <span class="logo-pool">POOL</span><span class="logo-school">SCHOOL</span>
    </a>
    <button class="nav-toggle" id="navToggle" aria-label="Menu openen">
      <span></span><span></span><span></span>
    </button>
    <ul class="nav-links" id="navLinks">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('lessen') }}">De Lessen</a></li>
      <li><a href="{{ route('over') }}">Over Mij</a></li>
      <li><a href="{{ route('contact') }}">Contact</a></li>
      <li><a href="{{ route('inschrijven') }}" class="btn-nav">Inschrijven</a></li>
    </ul>
  </div>
</nav>

<main>

<!-- ═══════════════════════════════════════════ HOME PAGE -->
<div id="page-home" class="page {{ $activePage === 'home' ? 'active' : '' }}">

  <section class="hero">
    <div class="container hero-inner">
      <div class="hero-text">
        <div class="hero-badge"><span class="badge-dot"></span>Privé Zwemles · Kleine Groepen</div>
        <h1>Leer zwemmen<br>met <span class="accent">plezier</span> &amp;<br>vertrouwen</h1>
        <p class="hero-sub">Pool School biedt warme, persoonlijke zwemlessen voor kinderen in groepen van maximaal 3. Elk kind verdient een veilige, zorgeloze start in het water.</p>
        <div class="hero-ctas">
          <a href="{{ route('inschrijven') }}" class="btn btn-primary">📋 Schrijf je in op de wachtlijst</a>
          <a href="{{ route('lessen') }}" class="btn btn-outline-white">Meer over de lessen</a>
        </div>
      </div>
      <div class="hero-visual">
        <div class="hero-card-stack">
          <div class="wave-float wave-float-1">🌊</div>
          <div class="wave-float wave-float-2">💧</div>
          <div class="hero-card hero-card-main">
            <div class="hero-card-title">🏊 Pool School</div>
            <span class="hero-pill">40 min. les</span>
            <span class="hero-pill">Max. 3 kinderen</span>
            <span class="hero-pill">Verwarmd bad</span>
            <span class="hero-pill">28–30°C</span>
          </div>
          <div class="hero-card hero-card-mini">
            <div class="hero-stat">€20</div>
            <div class="hero-stat-label">per les · 10-beurtenkaart</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="notice-banner">
    <div class="container">
      <div class="notice-inner">
        <div class="notice-icon-wrap">⏳</div>
        <div class="notice-body">
          <h2>De lessen zijn momenteel volzet</h2>
          <p>Schrijf je in op de wachtlijst en Stephanie brengt je via e-mail op de hoogte van zodra er een plaatsje vrijkomt.</p>
        </div>
        <div class="notice-cta-wrap">
          <a href="{{ route('inschrijven') }}" class="btn-white">Wachtlijst →</a>
        </div>
      </div>
    </div>
  </div>

  <section>
    <div class="container">
      <div class="section-head">
        <span class="section-label">Waarom Pool School?</span>
        <h2 class="section-title">Kleine groepen,<br>groot verschil</h2>
        <p class="section-sub">Elk kind leert in zijn eigen tempo. Bij Pool School staan persoonlijke aandacht en veiligheid altijd centraal.</p>
      </div>
      <div class="features-grid">
        <div class="feature-card"><div class="feature-icon">👶</div><h3>Privé &amp; persoonlijk</h3><p>Lessen in groepen van maximaal 3 kinderen. Elk kind wordt individueel begeleid terwijl de anderen uitrusten aan de kant.</p></div>
        <div class="feature-card"><div class="feature-icon">🌤️</div><h3>Buiten in eigen tuin</h3><p>De zwemlessen vinden plaats in de verwarmde buitenzwembad (28–30°C) met overkapping. Lessen gaan door van mei tot september.</p></div>
        <div class="feature-card"><div class="feature-icon">📅</div><h3>Jij kiest het moment</h3><p>Via een online agenda kies je zelf je lesdagen en -uren, op maat van jouw agenda. Flexibel en handig.</p></div>
        <div class="feature-card"><div class="feature-icon">🎫</div><h3>Veilige inschrijving</h3><p>Bij inschrijving koop je een 10-beurtenkaart (€200). Zo ben je zeker van je plaatsen.</p></div>
        <div class="feature-card"><div class="feature-icon">💧</div><h3>Warm &amp; comfortabel</h3><p>Het zwembad wordt verwarmd tot 28–30°C en is voorzien van een overkapping zodat de lessen doorgaan, ook als het regent.</p></div>
        <div class="feature-card"><div class="feature-icon">❤️</div><h3>Op eigen tempo</h3><p>Stephanie past zich volledig aan elk kind aan. Snelheid is niet het doel — vertrouwen en plezier in het water wel.</p></div>
      </div>
    </div>
  </section>

  <section class="how-section">
    <div class="container">
      <div class="section-head center">
        <span class="section-label">Hoe werkt het?</span>
        <h2 class="section-title">In 4 eenvoudige stappen</h2>
        <p class="section-sub">Van aanmelding tot in het water — snel en simpel.</p>
      </div>
      <div class="steps-grid">
        <div class="step-item"><div class="step-number">1</div><h3>Wachtlijst</h3><p>Schrijf je in via het online formulier. Stephanie neemt contact op zodra er een plaatsje vrij is.</p></div>
        <div class="step-item"><div class="step-number">2</div><h3>Bevestiging</h3><p>Je ontvangt toegang tot de online agenda en kiest je favoriete lestijden.</p></div>
        <div class="step-item"><div class="step-number">3</div><h3>10-beurtenkaart</h3><p>Koop je 10-beurtenkaart bij inschrijving (€200) en je bent verzekerd van je plek.</p></div>
        <div class="step-item"><div class="step-number">4</div><h3>Zwemmen maar! 🏊</h3><p>Je kind staat in het water voor 40 minuten persoonlijke les in een veilige, warme omgeving.</p></div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="section-head center">
        <span class="section-label">Tarieven</span>
        <h2 class="section-title">Duidelijk &amp; eerlijk</h2>
        <p class="section-sub">Geen verborgen kosten. Één formule, alles inbegrepen.</p>
      </div>
      <div class="pricing-card">
        <span class="pricing-badge">Standaard formule</span>
        <div class="pricing-amount"><sup>€</sup>20</div>
        <div class="pricing-per">per les · betaald via 10-beurtenkaart (€200)</div>
        <div class="pricing-divider"></div>
        <ul class="pricing-list">
          <li><span class="check">✔</span> 40 minuten persoonlijke les</li>
          <li><span class="check">✔</span> Groepen van maximaal 3 kinderen</li>
          <li><span class="check">✔</span> Verwarmd buiten zwembad (28–30°C)</li>
          <li><span class="check">✔</span> Overkapping — lessen gaan door bij regen</li>
          <li><span class="check">✔</span> Online agenda — kies zelf je tijdstippen</li>
          <li><span class="check">✔</span> Begeleiding op maat van elk kind</li>
        </ul>
        <a href="{{ route('inschrijven') }}" class="btn btn-primary" style="width:100%;justify-content:center;">📋 Schrijf je in op de wachtlijst</a>
        <p class="pricing-note">De lessen zijn momenteel volzet. Via de wachtlijst word je als eerste verwittigd bij beschikbare plaatsen.</p>
      </div>
    </div>
  </section>

  <section class="cta-section">
    <div class="container">
      <span class="section-label" style="color:rgba(255,255,255,0.6)">Klaar om te starten?</span>
      <h2 class="section-title">Geef jouw kind de gave<br>om te zwemmen</h2>
      <p>Schrijf je vandaag in op de wachtlijst. Stephanie brengt je persoonlijk op de hoogte zodra er een plaatsje beschikbaar is.</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
        <a href="{{ route('inschrijven') }}" class="btn btn-primary" style="background:white;color:var(--red)">📋 Schrijf je in</a>
        <a href="{{ route('contact') }}" class="btn btn-outline-white">Stel een vraag</a>
      </div>
    </div>
  </section>
</div>

<!-- ═══════════════════════════════════════════ LESSEN PAGE -->
<div id="page-lessen" class="page {{ $activePage === 'lessen' ? 'active' : '' }}">
  <div class="page-hero">
    <div class="container">
      <span class="section-label">Pool School</span>
      <h1>De Lessen</h1>
      <p>Alles wat je wil weten over privé zwemles bij Pool School.</p>
    </div>
  </div>

  <section>
    <div class="container">
      <div class="section-head center">
        <span class="section-label">Praktische info</span>
        <h2 class="section-title">Alle details op een rij</h2>
      </div>
      <div class="info-grid">
        <div class="info-card"><div class="info-card-icon">⏱️</div><h3>Duur &amp; Prijs</h3><p>Een les duurt <strong>40 minuten</strong> en kost <strong>€20,–</strong> per les.<br><br>Bij inschrijving koop je een <strong>10-beurtenkaart</strong> (€200) en ben je verzekerd van je plaatsen.</p></div>
        <div class="info-card"><div class="info-card-icon">📅</div><h3>Wanneer?</h3><p>Bij inschrijving krijg je toegang tot de <strong>online agenda</strong>.<br><br>Hierin kies je zelf uit de beschikbare data en plan je de zwemlessen in zoals het past in <strong>jouw agenda</strong>.</p></div>
        <div class="info-card"><div class="info-card-icon">🌤️</div><h3>Buiten</h3><p>Lessen vinden plaats tussen <strong>mei en september</strong>. Het zwembad wordt verwarmd tot <strong>28–30°C</strong> met <strong>overkapping</strong> — lessen gaan door bij regen!</p></div>
        <div class="info-card"><div class="info-card-icon">👫</div><h3>Privéles</h3><p>Er wordt les gegeven in <strong>groepen van 3</strong>. Zo worden de kinderen telkens <strong>individueel begeleid</strong> terwijl de anderen uitrusten aan de kant.</p></div>
        <div class="info-card"><div class="info-card-icon">🚀</div><h3>Hoe snel?</h3><p>Afhankelijk van het kind. <strong>10 beurten</strong> volstaat doorgaans niet maar is in ieder geval een mooie start!</p></div>
        <div class="info-card"><div class="info-card-icon">📍</div><h3>Locatie</h3><p>De lessen gaan door in de <strong>privétuin</strong> van Stephanie. Adres ontvang je na inschrijving.<br><br><a href="mailto:zwemlespoolschool@gmail.com" style="color:var(--navy);font-weight:700">zwemlespoolschool@gmail.com</a></p></div>
      </div>
    </div>
  </section>

  <section style="background:var(--white)">
    <div class="container">
      <div class="section-head center">
        <span class="section-label">Veelgestelde vragen</span>
        <h2 class="section-title">FAQ</h2>
        <p class="section-sub">Staat jouw vraag er niet bij? Neem gerust contact op!</p>
      </div>
      <div style="max-width:720px;margin:0 auto">
        <div class="faq-item open"><button class="faq-question">Vanaf welke leeftijd kunnen kinderen deelnemen?<span class="faq-arrow">▼</span></button><div class="faq-answer">Pool School richt zich op kinderen die klaar zijn om te leren zwemmen. In de praktijk zijn dat kinderen vanaf ongeveer 4–5 jaar, maar dit hangt af van het individuele kind.</div></div>
        <div class="faq-item"><button class="faq-question">Hoe werkt de 10-beurtenkaart?<span class="faq-arrow">▼</span></button><div class="faq-answer">Bij inschrijving koop je een 10-beurtenkaart voor €200. Per les wordt één beurt afgetrokken. Zo ben je zeker van je plekje en plan je zelf wanneer je de lessen volgt via de online agenda.</div></div>
        <div class="faq-item"><button class="faq-question">Gaan de lessen door bij slecht weer?<span class="faq-arrow">▼</span></button><div class="faq-answer">Ja! Het zwembad is voorzien van een overkapping waardoor de lessen kunnen doorgaan, ook als het regent. Bij extreme weersomstandigheden (onweer, storm) kan een les uitzonderlijk worden verplaatst.</div></div>
        <div class="faq-item"><button class="faq-question">Hoeveel lessen heeft mijn kind nodig?<span class="faq-arrow">▼</span></button><div class="faq-answer">Dat is heel individueel. Het hangt af van de motorische ontwikkeling en hoe vertrouwd het kind zich voelt in het water. 10 beurten is een goede start maar volstaat vaak niet voor een volledig zwemdiploma.</div></div>
        <div class="faq-item"><button class="faq-question">Kan ik als ouder aanwezig zijn?<span class="faq-arrow">▼</span></button><div class="faq-answer">Ja, ouders zijn welkom om toe te kijken. Soms helpt het juist als jonge kinderen hun ouders kunnen zien — dat geeft extra vertrouwen.</div></div>
        <div class="faq-item"><button class="faq-question">Wat als mijn kind een les mist?<span class="faq-arrow">▼</span></button><div class="faq-answer">Via de online agenda kan je lessen inplannen wanneer het jou uitkomt. Kan je een geplande les niet nakomen? Annuleer tijdig via de agenda.</div></div>
      </div>
    </div>
  </section>

  <section class="cta-section">
    <div class="container">
      <h2 class="section-title">Klaar om te starten?</h2>
      <p>De lessen zijn momenteel volzet, maar schrijf je in op de wachtlijst. Je bent als eerste aan de beurt!</p>
      <a href="{{ route('inschrijven') }}" class="btn btn-primary" style="background:white;color:var(--red)">📋 Schrijf je in op de wachtlijst</a>
    </div>
  </section>
</div>

<!-- ═══════════════════════════════════════════ OVER PAGE -->
<div id="page-over" class="page {{ $activePage === 'over' ? 'active' : '' }}">
  <div class="page-hero">
    <div class="container">
      <span class="section-label">Pool School</span>
      <h1>Over Mij</h1>
      <p>Maak kennis met het gezicht achter Pool School.</p>
    </div>
  </div>

  <section>
    <div class="container">
      <div class="about-grid">
        <div class="about-img-wrap">
          <div class="about-img-bg">🏊‍♀️</div>
          <div class="about-chip"><div class="chip-num">+3</div><div class="chip-label">jaar ervaring</div></div>
        </div>
        <div>
          <span class="section-label">Hallo, ik ben Stephanie</span>
          <h2 class="section-title">Elk kind verdient het<br>te leren zwemmen</h2>
          <p style="color:var(--text-muted);font-size:16px;margin-bottom:20px">Pool School is begonnen vanuit één simpele overtuiging: elk kind verdient een veilige, positieve start in het water — in zijn of haar eigen tempo, met persoonlijke aandacht.</p>
          <p style="color:var(--text-muted);font-size:16px;margin-bottom:28px">In kleine groepjes van maximaal 3 kinderen geef ik zwemlessen in mijn eigen tuin, in een warme en vertrouwde omgeving. Geen druk, geen stress — wél plezier en zelfvertrouwen.</p>
          <ul class="values-list">
            <li><span class="val-icon">🛡️</span><div><div class="val-title">Veiligheid eerst</div><div class="val-desc">Een veilige, vertrouwde omgeving is de basis voor elk kind om te leren zwemmen.</div></div></li>
            <li><span class="val-icon">💛</span><div><div class="val-title">Op eigen tempo</div><div class="val-desc">Elk kind is uniek. Ik pas mijn aanpak aan op de noden en het tempo van jouw kind.</div></div></li>
            <li><span class="val-icon">🎉</span><div><div class="val-title">Plezier in het water</div><div class="val-desc">Zwemmen moet leuk zijn! Ik zorg voor een positieve, bemoedigende sfeer bij elke les.</div></div></li>
            <li><span class="val-icon">📣</span><div><div class="val-title">Transparante communicatie</div><div class="val-desc">Je hoort eerlijk hoe je kind evolueert en wat de volgende stappen zijn.</div></div></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section style="background:var(--white)">
    <div class="container">
      <div style="max-width:680px;margin:0 auto;text-align:center">
        <div style="font-size:48px;margin-bottom:20px">💌</div>
        <h2 class="section-title" style="margin-bottom:24px">Een woordje van Stephanie</h2>
        <div style="background:var(--sky-bg);border-radius:var(--radius-lg);padding:36px 40px;text-align:left;border:1px solid var(--card-border)">
          <p style="font-size:16px;line-height:1.8;color:var(--text);margin-bottom:16px">"De lessen zijn reeds volzet. Dit betekent dat ik helaas die befaamde wachtlijst moet invoeren. Het is bittersweet, want enerzijds ben ik heel blij dat de inschrijvingen zo vlot verlopen.</p>
          <p style="font-size:16px;line-height:1.8;color:var(--text);margin-bottom:16px">Anderzijds, ben ik écht geen fan van wachtlijsten en had ik alle kindjes die willen leren zwemmen onmiddellijk een plaats gegeven.</p>
          <p style="font-size:16px;line-height:1.8;color:var(--text);margin-bottom:20px">Van zodra ik meer zicht heb op beschikbare plaatsen, breng ik je via e-mail op de hoogte."</p>
          <div class="signature">Veel liefs, Stephanie 💙</div>
        </div>
        <div style="margin-top:32px"><a href="{{ route('inschrijven') }}" class="btn btn-primary">📋 Schrijf je in op de wachtlijst</a></div>
      </div>
    </div>
  </section>
</div>

<!-- ═══════════════════════════════════════════ CONTACT PAGE -->
<div id="page-contact" class="page {{ $activePage === 'contact' ? 'active' : '' }}">
  <div class="page-hero">
    <div class="container">
      <span class="section-label">Neem contact op</span>
      <h1>Contact</h1>
      <p>Heb je een vraag? Stephanie helpt je graag verder.</p>
    </div>
  </div>

  <section>
    <div class="container">
      <div class="contact-grid">
        <div>
          <span class="section-label">Contactgegevens</span>
          <h2 class="section-title" style="margin-bottom:32px">Neem gerust<br>contact op</h2>
          <div class="contact-info-item">
            <div class="contact-info-icon">✉️</div>
            <div class="contact-info-text"><h4>E-mail</h4><a href="mailto:zwemlespoolschool@gmail.com">zwemlespoolschool@gmail.com</a></div>
          </div>
          <div class="contact-info-item">
            <div class="contact-info-icon">📘</div>
            <div class="contact-info-text"><h4>Facebook</h4><a href="https://www.facebook.com/zwemlespoolschool/" target="_blank" rel="noopener">Pool School op Facebook</a></div>
          </div>
          <div class="contact-info-item">
            <div class="contact-info-icon">📋</div>
            <div class="contact-info-text"><h4>Wachtlijst</h4><p>De lessen zijn momenteel volzet.</p><a href="{{ route('inschrijven') }}" style="color:var(--red);font-weight:800">→ Schrijf je in op de wachtlijst</a></div>
          </div>
          <div class="contact-info-item">
            <div class="contact-info-icon">📍</div>
            <div class="contact-info-text"><h4>Locatie</h4><p>De lessen vinden plaats in de privétuin van Stephanie. Het exacte adres krijg je na inschrijving.</p></div>
          </div>
        </div>
        <div class="contact-form">
          <h3 style="font-family:'Fredoka One',cursive;font-size:24px;color:var(--navy);margin-bottom:24px">Stuur een bericht</h3>
          @if (session('success'))
            <div class="form-success">{{ session('success') }}</div>
          @endif
          @if ($errors->any())
            <div class="form-errors">Controleer de velden en probeer opnieuw.</div>
          @endif
          <form method="POST" action="{{ route('contact.verstuur') }}">
            @csrf
            <div class="form-row">
              <div class="form-group"><label for="voornaam">Voornaam</label><input id="voornaam" name="voornaam" type="text" value="{{ old('voornaam') }}" placeholder="Jouw voornaam" required></div>
              <div class="form-group"><label for="achternaam">Achternaam</label><input id="achternaam" name="achternaam" type="text" value="{{ old('achternaam') }}" placeholder="Jouw achternaam" required></div>
            </div>
            <div class="form-group"><label for="email">E-mailadres</label><input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="jouw@email.be" required></div>
            <div class="form-group"><label for="onderwerp">Onderwerp</label>
              <select id="onderwerp" name="onderwerp" required>
                @foreach (['Vraag over de wachtlijst', 'Vraag over de lessen', 'Vraag over prijzen', 'Andere'] as $subject)
                  <option value="{{ $subject }}" @selected(old('onderwerp') === $subject)>{{ $subject }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group"><label for="bericht">Bericht</label><textarea id="bericht" name="bericht" placeholder="Stel hier jouw vraag..." required>{{ old('bericht') }}</textarea></div>
            <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center">Verstuur bericht</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- ═══════════════════════════════════════════ INSCHRIJVEN PAGE -->
<div id="page-inschrijven" class="page {{ $activePage === 'inschrijven' ? 'active' : '' }}">
  <div class="page-hero">
    <div class="container">
      <span class="section-label">Inschrijven</span>
      <h1>Schrijf je in</h1>
      <p>Op de wachtlijst, klaar voor een plaatsje zodra het vrijkomt.</p>
    </div>
  </div>

  <section style="padding:90px 0">
    <div class="container">
      <div class="enroll-card">
        <span class="enroll-icon">📋</span>
        <h1>Wachtlijst Pool School</h1>
        <p class="lead">De lessen zijn momenteel <strong>volzet</strong>. Door je in te schrijven op de wachtlijst, word je via e-mail verwittigd zodra er een plaatsje beschikbaar is.</p>
        <div class="alert-waitlist">
          <strong>💛 Bericht van Stephanie:</strong><br>
          "Het is bittersweet — ik ben heel blij dat de inschrijvingen zo vlot verlopen, maar ik had liever alle kindjes onmiddellijk een plaats gegeven. Van zodra ik meer zicht heb op beschikbare plaatsen, breng ik je via e-mail op de hoogte."
        </div>
        <div class="enroll-steps">
          <div class="enroll-step"><div class="enroll-step-num">1</div><strong>Formulier invullen</strong><p>Vul het formulier in via de knop hieronder.</p></div>
          <div class="enroll-step"><div class="enroll-step-num">2</div><strong>Wachten op bericht</strong><p>Stephanie contacteert je per e-mail bij een vrijgekomen plek.</p></div>
          <div class="enroll-step"><div class="enroll-step-num">3</div><strong>10-beurtenkaart</strong><p>Koop je kaart bij bevestiging en plan je lessen via de online agenda.</p></div>
        </div>
        <div class="enroll-divider"></div>
        <p style="font-size:15px;color:var(--text-muted);margin-bottom:24px">Het inschrijvingsformulier wordt beheerd via Microsoft Forms. Klik op de knop hieronder om het formulier te openen.</p>
        <a href="https://forms.office.com/e/GZ4e0BeE9D" target="_blank" rel="noopener" class="btn btn-primary" style="width:100%;justify-content:center;font-size:17px;padding:16px">📝 Open het inschrijvingsformulier</a>
        <div class="enroll-divider"></div>
        <p style="font-size:14px;color:var(--text-muted)">Heb je vragen? Stuur een e-mail naar <a href="mailto:zwemlespoolschool@gmail.com" style="color:var(--navy);font-weight:700">zwemlespoolschool@gmail.com</a> of vind ons op <a href="https://www.facebook.com/zwemlespoolschool/" target="_blank" rel="noopener" style="color:var(--navy);font-weight:700">Facebook</a>.</p>
      </div>
    </div>
  </section>

  <section style="background:var(--white);padding-top:0;padding-bottom:60px">
    <div class="container">
      <div class="features-grid" style="max-width:900px;margin:0 auto">
        <div class="feature-card" style="text-align:center"><div class="feature-icon" style="margin:0 auto 14px">📧</div><h3>Persoonlijk bericht</h3><p>Stephanie contacteert je persoonlijk per e-mail zodra er een plaatsje vrijkomt.</p></div>
        <div class="feature-card" style="text-align:center"><div class="feature-icon" style="margin:0 auto 14px">🔒</div><h3>Geen verplichtingen</h3><p>Inschrijven op de wachtlijst is vrijblijvend. Je beslist zelf als er een plaatsje beschikbaar is.</p></div>
        <div class="feature-card" style="text-align:center"><div class="feature-icon" style="margin:0 auto 14px">💙</div><h3>Met hart &amp; ziel</h3><p>Elke inschrijving op de wachtlijst telt voor Stephanie. Ze doet haar best om zo snel mogelijk iedereen een plek te geven.</p></div>
      </div>
    </div>
  </section>
</div>

</main>

<!-- FOOTER -->
<footer class="footer">
  <div class="container footer-inner">
    <div class="footer-brand">
      <a href="{{ route('home') }}" class="footer-logo">
        <span class="logo-pool">POOL</span><span class="logo-school">SCHOOL</span>
      </a>
      <p class="footer-tagline">Privé Zwemles</p>
      <p class="footer-sub">Warme lessen in een kleine groep.<br>Elk kind verdient een veilige start in het water.</p>
    </div>
    <div class="footer-links">
      <h4>Pagina's</h4>
      <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('lessen') }}">De Lessen</a></li>
        <li><a href="{{ route('over') }}">Over Mij</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
    <div class="footer-contact">
      <h4>Contact</h4>
      <p><a href="mailto:zwemlespoolschool@gmail.com">zwemlespoolschool@gmail.com</a></p>
      <div class="footer-social">
        <a href="https://www.facebook.com/zwemlespoolschool/" target="_blank" rel="noopener" aria-label="Facebook">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
        </a>
        <a href="mailto:zwemlespoolschool@gmail.com" aria-label="Email">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
        </a>
      </div>
    </div>
  </div>
  <div class="footer-bottom"><p>&copy; 2025 Pool School — Privé Zwemles. Alle rechten voorbehouden.</p></div>
</footer>

<script src="{{ asset('js/poolschool-app.js') }}"></script>
</body>
</html>
