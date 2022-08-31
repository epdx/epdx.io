import { NetlifyAPI } from 'netlify'

const client = new NetlifyAPI('1234myAccessToken')
const sites = await client.listSites()


const opts = {
  userAgent: 'netlify/js-client',
  scheme: 'https',
  host: 'api.netlify.com',
  pathPrefix: '/api/v1',
  accessToken: '1234myAccessToken',
  agent: undefined, // e.g. HttpsProxyAgent
  globalParams: {}, // parameters you want available for every request.
  // Global params are only sent of the OpenAPI spec specifies the provided params.
}
