Vue.component('chuck-card', {
    props: ['iconUrl', 'value'],
    template: `
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img :src="iconUrl" class="card-img-top" alt="Chuck Norris Icon">
          <div class="card-body">
            <p class="card-text">{{ value }}</p>
          </div>
        </div>
      </div>
    `,
  });
  
  new Vue({
    el: '#app',
    data: {
      chuck: [
        { icon_url: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4yRlHR4y34MKwo7NMArcMjxXo0yHHwMFewg&s", value: "Chuck Norris can skydive into outer space." },
        { icon_url: "https://img.stl.team/images/3dgms/3DGMS_37990/black/full/3DGMS_37990[Chuck_Norris_Bring_on_the_Pain_game].jpg", value: "The chief export of Chuck Norris is pain." },
        { icon_url: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSz0bppfmuwRfE-PQY9ngJyQjQSp9pHkzhZFA&s", value: "Chuck Norris doesn't read books. He stares them down until he gets the information he wants." },
        { icon_url: "https://dropinblog.net/34243425/files/Chuck_Norris_Doesnt_Sleep_20220126_-_Picture_10.jpg", value: "Time waits for no man. Unless that man is Chuck Norris." },
        { icon_url: "https://www.rgsgroup.co.za/wp-content/uploads/2022/10/5171Scramble-complete-3a2-copy.jpg", value: "If you spell Chuck Norris in Scrabble, you win. Forever." },
      ],
    },
  });  