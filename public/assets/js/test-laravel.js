var getUsers = function () {
  $.ajax({
    type: 'GET',
    url: '/users',
    success: function (msg) {
      console.log('Api works');
      console.log(msg.success);
    },
    error: function (msg) {
      alert(msg);
    }
  });
}

var getMovies = function () {
  $.ajax({
    type: 'GET',
    url: '/movies',
    data: {

    },
    success: function (msg) {
      console.log('Api works');
      console.log(msg.success);
    },
    error: function (msg) {
      alert(msg);
    }
  });
}

var addMovie = function () {
  $.ajax({
    type: 'POST',
    url: '/movies',
    data: {
      imdb_id: $('#movieImdb').val(),
      name: $('#movieName').val()
    },
    success: function (msg) {
      console.log('Api works');
      console.log(msg.success);
    },
    error: function (msg) {
      alert(msg);
    }
  });
}

var subscribeMovie = function () {
  $.ajax({
    type: 'POST',
    url: '/users/' + $('#userId').val() + '/movies',
    data: {
      movie_id: $('#movieId').val()
    },
    success: function (msg) {
      console.log('Api works');
      console.log(msg.success);
    },
    error: function (msg) {
      alert(msg);
    }
  });
}

var updateSubscription = function () {
  $.ajax({
    type: 'PUT',
    url: '/users/' + $('#userId').val() + '/movies/' + $('#movieId').val(),
    data: {
      new_status: $('#newStatus').val()
    },
    success: function (msg) {
      console.log('Api works');
      console.log(msg.success);
    },
    error: function (msg) {
      alert(msg);
    }
  });
}

var deleteSubscription = function () {
  $.ajax({
    type: 'DELETE',
    url: '/users/' + $('#userId').val() + '/movies/' + $('#movieId').val(),
    success: function (msg) {
      console.log('Api works');
      console.log(msg.success);
    },
    error: function (msg) {
      alert(msg);
    }
  });
}