<section class="card register">
  <form name="myform"  ng-submit="register()" novalidate>

    <div class="textintro">
      <h1>Register</h1>
      <p>To access site features</p>
        <p class="message" ng-show="message">  {{message}}</p>

    </div>

    <fieldset>
      <input type="text" name="firstname" placeholder="First Name" ng-model="user.firstname" ng-required="true">
        <p class="error validationerror"  ng-show="myform.firstname.$invalid && myform.email.$touched ">
            First name is required
        </p>
      <input type="text" name="lastname" placeholder="Last Name"  ng-model="user.lastname" ng-required="true">
        <p class="error validationerror"  ng-show="myform.lastname.$invalid && myform.email.$touched ">
            Last name is required
        </p>
      <input type="email" name="email" placeholder="Email"  ng-model="user.email" ng-required="true">
        <p class="error validationerror"  ng-show="myform.email.$invalid && myform.email.$touched ">
            Must be a valid email
        </p>
      <input type="password" name="password" placeholder="Password"  ng-model="user.password" ng-required="true">
        <p class="error validationerror"  ng-show="myform.password.$invalid && myform.password.$touched ">
            Password is required
        </p>
    </fieldset>

    <button type="submit" class="btn" ng-disabled="myform.$invalid">Register</button>
    <p>or <a ng-href="#/login">login</a></p>
  </form>
</section>
