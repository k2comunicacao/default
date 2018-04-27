<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
	var OneSignal = window.OneSignal || [];

  OneSignal.push(function() {
    OneSignal.init({
      appId: "0cec97bf-0a9c-48b5-b0df-b5fcbe6b2d54",
		autoRegister: true,
		welcomeNotification: {
        "title": "Obrigado por fazer parte do nosso time.",
        "message": "Nós da Lazer Shop agradecemos o seu interesse!",
       "url": "" /* Leave commented for the notification to not open a window on Chrome and Firefox (on Safari, it opens to your webpage) */
      },
		
	  notifyButton: {
        enable: true, 
        size: 'medium', 
        theme: 'default', 
        position: 'bottom-right', 
        offset: {
            bottom: '85px',
        },
        prenotify: true, 
        showCredit: false, 
        text: {
            'tip.state.unsubscribed': 'Inscreva-se para novidades e promoções!',
            'tip.state.subscribed': "Nós Agradecemos a sua inscrição",
            'tip.state.blocked': "Você bloqueou as notificações :(",
            'message.prenotify': 'Seja Bem Vindo a nossa lista VIP.',
            'message.action.subscribed': "Nós Agradecemos a sua inscrição",
            'message.action.resubscribed': "Obrigado por aceitar nossas Notificações!",
            'message.action.unsubscribed': "Você não vai mais receber Notificações",
            'dialog.main.title': 'Central de Notificações',
            'dialog.main.button.subscribe': 'Receber Notificações',
            'dialog.main.button.unsubscribe': 'Cancelar Notificações',
            'dialog.blocked.title': 'Desbloquear Notificações',
            'dialog.blocked.message': "Siga estas instruções para permitir Notificações"
        	},
		 colors: { // Customize the colors of the main button and dialog popup button
      	 'circle.background': 'rgb(64,147,151)',
      	 'circle.foreground': 'white',
      	 'badge.background': 'rgb(64,147,151)',
      	 'badge.foreground': 'white',
      	 'badge.bordercolor': 'white',
      	 'pulse.color': 'white',
      	 'dialog.button.background.hovering': 'rgb(77, 101, 113)',
      	 'dialog.button.background.active': 'rgb(70, 92, 103)',
      	 'dialog.button.background': 'rgb(84,110,123)',
      	 'dialog.button.foreground': 'white'
    	},
      },
		
		promptOptions: {
        /* Maximo 90 caracteres */
        actionMessage: "Que tal ficar por dentro das novidades e promoções da Lazer Shop em primeira mão?",
        /* Botao Aceitar - Maximo 15 caracteres */
        acceptButtonText: "Eu Quero :)",
        /* Botao Cancelar - Maximo 15 caracteres */
        cancelButtonText: "Passo a vez :(",
		/* Nome do Site - Máximo 30 caracteres */
        siteName: 'Lazer Shop',
        /* Exemplo de Titulo de Notificação */
        exampleNotificationTitle: 'Novos Itens de Cutelaria',
        /* Exemplo de Mensagem de Notificacao */
        exampleNotificationMessage: 'Confira a nova linha de facas Wüsthof.',
        /* Texto abaixo da notificacao */
        exampleNotificationCaption: 'Você pode cancelar a qualquer momento.',
      }
		
    });
	  // Do NOT call init() twice
	  
  });
	
	OneSignal.push(function() {
      OneSignal.showHttpPrompt();
    });
	
</script>
