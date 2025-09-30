function trocarMapa(cep) {
  let iframe = document.getElementById("mapaa");
  let src = "";

  if (cep === "cep1") {
        $src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.311383499985!2d-43.287053803562564!3d-22.642176075603853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997322a0abd2bb%3A0x8a2838ef7a5f7354!2sR.%20Regina%20L%C3%BAcia%20-%20Santa%20Cruz%20da%20Serra%2C%20Duque%20de%20Caxias%20-%20RJ%2C%2025255-060!5e0!3m2!1spt-BR!2sbr!4v1758046152658!5m2!1spt-BR!2sbr";
    } else if (cep === "cep2") {
        $src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.311383499985!2d-43.287053803562564!3d-22.642176075603853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997322a0abd2bb%3A0x8a2838ef7a5f7354!2sR.%20Regina%20L%C3%BAcia%20-%20Santa%20Cruz%20da%20Serra%2C%20Duque%20de%20Caxias%20-%20RJ%2C%2025255-060!5e0!3m2!1spt-BR!2sbr!4v1758046152658!5m2!1spt-BR!2sbr";
    } else if (cep === "cep3") {
        $src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14713.072730093092!2d-43.298728152186335!3d-22.792524585748154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997a587b6ee05d%3A0x5005b5a4bd1471ca!2sRod.%20Washington%20Luiz%20-%20Parque%20Duque%2C%20Duque%20de%20Caxias%20-%20RJ%2C%2025085-008!5e0!3m2!1spt-BR!2sbr!4v1758046452395!5m2!1spt-BR!2sbr";
    }

  iframe.src = $src;
}
