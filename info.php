<?php require_once 'includes/header.php'; ?>
<div 
    class="france-visa-banner" 
    style="
        background: linear-gradient(90deg, #ffe066 0%, #ffd700 100%);
        color: #222;
        padding: 18px 30px;
        margin: 32px auto 28px auto;
        text-align: center;
        font-weight: bold;
        border-radius: 16px;
        box-shadow: 0 4px 16px rgba(255, 215, 0, 0.18), 0 1.5px 8px rgba(0,0,0,0.08);
        font-size: 1.25rem;
        letter-spacing: 1px;
        max-width: 600px;
        position: relative;
        overflow: hidden;
        animation: bannerPop 0.7s cubic-bezier(.68,-0.55,.27,1.55);
    ">
    <span style="font-size:2rem;vertical-align:middle;animation: bounce 1.2s infinite alternate;">🎉</span>
    <span style="margin-left: 12px;">Pour info : ce service sera disponible le <b>vendredi soir à partir de 20h</b> (heure de Paris) !</span>
    <span style="font-size:2rem;vertical-align:middle;animation: bounce 1.2s 0.6s infinite alternate;">🚀</span>
</div>
<style>
@keyframes bannerPop {
    0% { transform: scale(0.7) translateY(-40px); opacity: 0; }
    80% { transform: scale(1.05) translateY(5px); opacity: 1; }
    100% { transform: scale(1) translateY(0); }
}
@keyframes bounce {
    0% { transform: translateY(0);}
    100% { transform: translateY(-10px);}
}
</style>
<?php require_once 'includes/footer.php'; ?>